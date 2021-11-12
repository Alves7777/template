<?php

namespace App\Routes\SectionTwo;

use App\Http\Controllers\Api\ApiSectionTwoController;
use Illuminate\Support\Facades\Route;

class SectionTwoRoute
{
    public static function routes()
    {
        Route::resource('/sectiontwo',ApiSectionTwoController::class);

    }
}
