<?php

namespace App\Routes\SectionThree;


use App\Http\Controllers\SectionThree\SectionThreeController;
use Illuminate\Support\Facades\Route;

class SectionThreeRoute
{
    public static function routes()
    {
        Route::resource('/sectionthree',SectionThreeController::class);

    }
}
