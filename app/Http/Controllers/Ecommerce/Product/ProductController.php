<?php

namespace App\Http\Controllers\Ecommerce\Product;

use App\AbstractView\AbstractView;
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
use PagSeguro\Services\Session;

class ProductController extends Controller
{
    private $_configs;

    public function __construct()
    {
        $this->_configs = new Configure();
        $this->_configs->setCharset("UTF-8");
        $this->_configs->setAccountCredentials(env('PAGSEGURO_EMAIL'),env('PAGSEGURO_TOKEN'));
        $this->_configs->setEnvironment(env('PAGSEGURO_AMBIENTE'));
        $this->_configs->setLog(true, storage_path('logs/pagseguro_' . date('Ymd') . '.log'));
    }

    public function getCredential()
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
        (double)$totalProduct = number_format($total,2,',','.');

        return view('site.ecommerce.cart', $data, compact('totalProduct'));
    }

    public function deleteCart($index, Request $request): RedirectResponse
    {
        $cart = session('cart', []);

        if(isset($cart[$index])) {
            unset($cart[$index]);
        }

        session(['cart' => $cart]);
        return redirect()->route('view_cart');

    }

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
        }

        request()->session()->flash($result['status'], $result['message']);

        return redirect()->route('view_cart');
    }

    public function purchaseHistory()
    {
      $data  = [];
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

        $sessionCode = Session::create(
          $this->getCredential()
        );
        $IDSession = $sessionCode->getResult();
        $data['sessionID'] = $IDSession;

        return view('site.ecommerce.purchase.pay', $data);
    }

}
