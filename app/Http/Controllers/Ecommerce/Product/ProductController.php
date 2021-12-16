<?php

namespace App\Http\Controllers\Ecommerce\Product;

use App\Http\Controllers\Controller;
use App\Models\Ecommerce\Category\Category;
use App\Models\Ecommerce\Product\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

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

    public function addCart(Request $request, $product_id = 0)
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

        return view('site.ecommerce.cart', $data);
    }

    public function deleteCart($index, Request $request)
    {
        $cart = session('cart', []);

        if(isset($cart[$index])) {
            unset($cart[$index]);
        }

        session(['cart' => $cart]);
        return redirect()->route('view_cart');

    }

}
