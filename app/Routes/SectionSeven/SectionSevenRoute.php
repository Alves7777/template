<?php

namespace App\Routes\SectionSeven;

use App\Http\Controllers\SectionSeven\SectionSevenController;
use Illuminate\Support\Facades\Route;

class SectionSevenRoute
{
    public static function routes()
    {
        Route::resource('/sectionseven', SectionSevenController::class);

    }
}
