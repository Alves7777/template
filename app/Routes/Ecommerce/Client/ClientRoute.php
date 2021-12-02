<?php

namespace App\Routes\Ecommerce\Client;

use App\Http\Controllers\Ecommerce\Client\ClientController;
use Illuminate\Support\Facades\Route;

class ClientRoute
{
    public static function routes()
    {
        Route::match(['get', 'post'], 'eco_register', [ClientController::class, 'ecoRegister'])->name('eco_register');
        Route::match(['get', 'post'], 'client/add', [ClientController::class, 'addClient'])->name('add_client');

    }
}
