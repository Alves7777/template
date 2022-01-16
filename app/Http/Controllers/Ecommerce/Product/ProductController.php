<?php

namespace App\Http\Controllers\Ecommerce\Product;


use App\Http\Controllers\Controller;
use App\Models\Ecommerce\Category\Category;
use App\Models\Ecommerce\Order\Order;
use App\Models\Ecommerce\OrderItems\OrderItems;
use App\Models\Ecommerce\Product\Product;
use App\Services\Sale\SaleService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PagSeguro\Configuration\Configure;
use PagSeguro\Domains\AccountCredentials;
use PagSeguro\Services\DirectPayment\CreditCard;
use PagSeguro\Services\Session;

class ProductController extends Controller
{
    private $_configs;

    public function __construct()
    {
        $this->_configs = new Configure();
        $this->_configs->setCharset("UTF-8");
        $this->_configs->setAccountCredentials(env('PAGSEGURO_EMAIL'), env('PAGSEGURO_TOKEN'));
        $this->_configs->setEnvironment(env('PAGSEGURO_AMBIENTE'));
        $this->_configs->setLog(true, storage_path('logs/pagseguro_' . date('Ymd') . '.log'));
    }

    public function getCredential(): AccountCredentials
    {
        return $this->_configs->getAccountCredentials();
    }

    public function index(Request $request)
    {
        $data = [];
        $listProducts = Product::all();
        $data['list'] = $listProducts;
        return view('site.ecommerce.product', $data);
    }

    public function category(Request $request, $category_id = 0)
    {
        $data = [];
        $listCategory = Category::all();
        $queryProducts = Product::limit(4);

        if ($category_id != 0) {
            $queryProducts->where('category_id', $category_id);
        }
        $listProducts = $queryProducts->get();

        $data['listCategory'] = $listCategory;
        $data['listProduct'] = $listProducts;

        return view('site.ecommerce.category', $data);
    }

    public function addCart(Request $request, $product_id = 0): RedirectResponse
    {
        // buscar produto por id
        $prod = Product::find($product_id);
        //se encontrar o produto
        if (isset($prod)) {
            //encontrou o produto
            $cart = session('cart', []);

            array_push($cart, $prod);

            $cart = session(['cart' => $cart]);
        }

        return redirect()->route('indexProduct');
    }

    public function viewCart(Request $request)
    {
        $cart = session('cart', []);
        $data = ['cart' => $cart];

        $total = 0;
        foreach ($data["cart"] as $value) {
            $total += $value['value'];
        }
        (double)$totalProduct = number_format($total, 2, ',', '.');

        return view('site.ecommerce.cart', $data, compact('totalProduct'));
    }

    public function deleteCart($index, Request $request): RedirectResponse
    {
        $cart = session('cart', []);

        if (isset($cart[$index])) {
            unset($cart[$index]);
        }

        session(['cart' => $cart]);
        return redirect()->route('view_cart');

    }

    /**
     * @throws \Exception
     */
    public function finishCart(): RedirectResponse
    {
        $userAdmin = Auth::guard('admin')->user();

        if (empty($userAdmin)) {
            alert()->warning('Você precisa está logado!!!');
            return redirect()->back();
        }

        $prods = session('cart', []);
        $saleService = new SaleService();
        $result = $saleService->finishSale($prods, $userAdmin);

        if ($result['status'] == "success") {
            request()->session()->forget("cart");

            $creditCard = new \PagSeguro\Domains\Requests\DirectPayment\CreditCard();
            $creditCard->setReference('PED_' . $result['order_id']);
            $creditCard->setCurrency('BRL');

            foreach ($prods as $p) {
                $creditCard->addItems()->withParameters(
                    $p->id,
                    $p->name,
                    1,
                    number_format($p->value, 2, '.', '')
                );
            }
//            $userCred = $userAdmin;
            $creditCard->setSender()->setName($userAdmin->name . "" . $userAdmin->name);
//            $creditCard->setSender()->setEmail($userAdmin->email);
            // colocar informação correta no e-mail
            $creditCard->setSender()->setEmail("lucasteste" . "@sandbox.pagseguro.com.br");
            $creditCard->setSender()->setHash(request()->input('hashseller'));
            $creditCard->setSender()->setPhone()->withParameters(21, 212336548);
            $creditCard->setSender()->setDocument()->withParameters('CPF', '04459085054');

            //informações importante pra ser implantado no formulário!!!
            $creditCard->setShipping()->setAddress()->withParameters(
                'Rua amador Bueno',
                '1328',
                'Jardim das Oliveiras',
                '60821040',
                'Fortaleza',
                'CE',
                'BRA',
                'Casa, 123',
            );

            $creditCard->setBilling()->setAddress()->withParameters(
                'Av. Amador Bueno',
                '123',
                'Jardim das Oliveiras',
                '60821040',
                'Fortaleza',
                'CE',
                'BRA',
                'Casa, 123',
            );
            $token = request()->input('cardtoken');
            $creditCard->setToken($token); //aqui
            $npacelas = request()->input('npacelas'); //aqui
            $totalPagar = request()->input('totalPagar');
            $totalParcelas = (float)request()->input('totalParcelas');

            // tive que aumentar 0.01 centavos no $totalParcelas, pois estava dando o erro: <message>installment value invalid value: $totalParcelas
            $creditCard->setInstallment()->withParameters($npacelas, number_format($totalParcelas, 2, '.',''));
            //Dados do titltuat do cartão, ideal estpa no formulário.
            $creditCard->setHolder()->setName($userAdmin->name . "" . $userAdmin->name);
            $creditCard->setHolder()->setDocument()->withParameters('CPF', '04459085054');
            $creditCard->setHolder()->setBirthDate('07/02/1994');
            $creditCard->setHolder()->setPhone()->withParameters(85,987826658);

            $creditCard->setMode('DEFAULT');
            $result = $creditCard->register($this->getCredential());

            echo "compra realizada com sucessso";

        } else {

            echo "error na hora de realizar a compra";
        }

        request()->session()->flash($result['status'], $result['message']);

        return redirect()->route('view_cart');
    }

    public function purchaseHistory()
    {
        $data = [];
        $idUser = Auth::guard('admin')->user()->id;

        $listOrders = Order::where('admin_id', $idUser)
            ->orderBy('date_order', 'desc')
            ->get();

        $data['list'] = $listOrders;

        return view('site.ecommerce.purchase.history', $data);
    }

    public function details()
    {
        $idOrder = request()->input('idOrder');

        $listItems = OrderItems::join('products', 'products.id', '=', 'order_items.product_id')
            ->where('order_id', $idOrder)
            ->get(['order_items.*', 'order_items.value as valueitem', 'products.*']);

        $data = [];
        $data["listItems"] = $listItems;

        return view('site.ecommerce.purchase.details', $data);
    }

    public function pay()
    {
        $data = [];

        $cart = session('cart', []);
        $data['cart'] = $cart;

        $total = 0;
        foreach ($data["cart"] as $value) {
            $total += $value['value'];
        }
        (double)$totalProduct = number_format($total, 2, ',', '.');

        $sessionCode = Session::create(
            $this->getCredential()
        );
        $IDSession = $sessionCode->getResult();
        $data['sessionID'] = $IDSession;

        return view('site.ecommerce.purchase.pay', $data, compact('totalProduct'));
    }

}
