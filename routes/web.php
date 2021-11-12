<?php

use App\Http\Controllers\Api\ApiFreightController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Site\_PagesController;
use App\Http\Controllers\Site\HomeController;
use App\Routes\Navbar\NavbarRoute;
use App\Routes\Pages\PagesRoute;
use App\Routes\SectionOne\SectionOneRoute;
use App\Routes\SectionTwo\SectionTwoRoute;
use App\Routes\Topbar\TopbarRoute;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class, 'index']);
Route::get('/page_1',[_PagesController::class, 'page_1']);
Route::get('/page_2',[_PagesController::class, 'page_2']);
Route::get('/page_3',[_PagesController::class, 'page_3']);
Route::get('/page_4',[_PagesController::class, 'page_4']);
Route::get('/page_5',[_PagesController::class, 'page_5']);
Route::get('/page_6',[_PagesController::class, 'page_6']);
Route::get('/page_7',[_PagesController::class, 'page_7']);
Route::get('/page_8',[_PagesController::class, 'page_8']);
Route::get('/page_9',[_PagesController::class, 'page_9']);
Route::get('/page_10',[_PagesController::class, 'page_10']);
Route::get('/page_11',[_PagesController::class, 'page_11']);


Route::get('/contato',[ApiFreightController::class, 'getFreight']);
Route::get('/contato-post',[ApiFreightController::class, 'postFreight']);


//API
//Route::post('add', [FreightController::class, 'store']);
//Route::put('edit/{id}', [FreightController::class, 'update']);
//Route::delete('delete/{id}', [FreightController::class, 'destroy']);

Route::get('/cursos', function () {
    return view('site.courses');
})->name('site.courses');

//Route::get('/contato', function () {
//    return view('site.contact');
//})->name('site.contact');

NavbarRoute::routes();
TopbarRoute::routes();
SectionOneRoute::routes();
PagesRoute::routes();
SectionTwoRoute::routes();


// API

//Route::get('freight/get', [App\Http\Controllers\Api\ApiFreightController::class, 'getFreight']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
