<?php

namespace App\Routes\SectionFive;

use App\Http\Controllers\SectionFive\SectionFiveController;
use Illuminate\Support\Facades\Route;

class SectionFiveRoute
{
    public static function routes()
    {
        Route::resource('/sectionfive',SectionFiveController::class);

    }
}
