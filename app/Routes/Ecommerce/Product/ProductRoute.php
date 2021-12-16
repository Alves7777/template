<?php

namespace App\Routes\Ecommerce\Product;

use App\Http\Controllers\Ecommerce\Product\ProductController;
use Illuminate\Support\Facades\Route;

class ProductRoute
{
    public static function routes()
    {
        Route::match(['get', 'post'], 'product', [ProductController::class, 'index'])->name('indexProduct');
        Route::match(['get', 'post'], 'category', [ProductController::class, 'category'])->name('category');
        Route::match(['get', 'post'], '{category_id}/category', [ProductController::class, 'category'])->name('category_por_id');
        Route::match(['get', 'post'], '{product_id}/cart/add', [ProductController::class, 'addCart'])->name('add_cart');
        Route::match(['get', 'post'], 'cart', [ProductController::class, 'viewCart'])->name('view_cart');
        Route::match(['get', 'post'], '{index}/delete/cart', [ProductController::class, 'deleteCart'])->name('cart_delete');

    }
}
