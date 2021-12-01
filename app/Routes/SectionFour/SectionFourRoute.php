<?php

namespace App\Routes\SectionFour;


use App\Http\Controllers\SectionFour\SectionFourController;
use Illuminate\Support\Facades\Route;

class SectionFourRoute
{
    public static function routes()
    {
        Route::resource('/sectionfour',SectionFourController::class);

    }
}
