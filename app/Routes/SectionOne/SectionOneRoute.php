<?php

namespace App\Routes\SectionOne;

use App\Http\Controllers\SectionOne\SectionOneController;
use Illuminate\Support\Facades\Route;

class SectionOneRoute
{
    public static function routes()
    {
        Route::resource('sectionone', SectionOneController::class);
    }
}
