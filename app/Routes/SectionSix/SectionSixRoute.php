<?php

namespace App\Routes\SectionSix;

use App\Http\Controllers\SectionSix\SectionSixController;
use Illuminate\Support\Facades\Route;

class SectionSixRoute
{
    public static function routes()
    {
        Route::resource('/sectionsix', SectionSixController::class);

    }
}
