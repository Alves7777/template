<?php

use App\Http\Controllers\Site\HomeController;
use App\Routes\Navbar\NavbarRoute;
use App\Routes\SectionOne\SectionOneRoute;
use App\Routes\Topbar\TopbarRoute;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class, 'index']);


Route::get('/cursos', function () {
    return view('site.courses');
})->name('site.courses');

Route::get('/contato', function () {
    return view('site.contact');
})->name('site.contact');

NavbarRoute::routes();
TopbarRoute::routes();
SectionOneRoute::routes();

