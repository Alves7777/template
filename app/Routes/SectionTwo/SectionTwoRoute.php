<?php

namespace App\Routes\SectionTwo;

use App\Http\Controllers\SectionTwo\SectionTwoController;
use Illuminate\Support\Facades\Route;

class SectionTwoRoute
{
    public static function routes()
    {
        Route::resource('/sectiontwo',SectionTwoController::class);

    }
}
