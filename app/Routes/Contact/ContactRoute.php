<?php

namespace App\Routes\Contact;

use App\Http\Controllers\Contact\ContactController;
use Illuminate\Support\Facades\Route;

class ContactRoute
{
    public static function routes()
    {
        Route::resource('/contact', ContactController::class);

    }
}
