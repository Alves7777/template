<?php

namespace App\Routes\Ecommerce\Client;

use App\Http\Controllers\Ecommerce\Client\ClientController;
use Illuminate\Support\Facades\Route;

class ClientRoute
{
    public static function routes()
    {
        Route::match(['get', 'Post'], 'eco_register', [ClientController::class, 'ecoRegister'])->name('eco_register');
        Route::match(['get', 'Post'], 'client/add', [ClientController::class, 'addClient'])->name('add_client');

    }
}
