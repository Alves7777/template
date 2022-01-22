<?php

namespace App\Routes\CollectionsImages;

use App\Http\Controllers\CollectionsImages\CollectionsImagesController;
use Illuminate\Support\Facades\Route;

class CollectionsImagesRoute
{
    public static function routes()
    {
        Route::resource('collectionsimages', CollectionsImagesController::class);

    }
}
