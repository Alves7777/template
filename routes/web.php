<?php

use App\Http\Controllers\Api\ApiFreightController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Site\_PagesController;
use App\Http\Controllers\Site\HomeController;
use App\Routes\Ecommerce\Product\ProductRoute;
use App\Routes\Ecommerce\Client\ClientRoute;
use App\Routes\Ecommerce\UserEcommerce\UserEcommerceRoute;
use App\Routes\Navbar\NavbarRoute;
use App\Routes\Pages\PagesRoute;
use App\Routes\Progress\ProgressRoute;
use App\Routes\Score\ScoreRoute;
use App\Routes\SectionFour\SectionFourRoute;
use App\Routes\SectionOne\SectionOneRoute;
use App\Routes\SectionThree\SectionThreeRoute;
use App\Routes\SectionTwo\SectionTwoRoute;
use App\Routes\Title\TitleRoute;
use App\Routes\Topbar\TopbarRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//api test
Route::get('/contato',[ApiFreightController::class, 'getFreight']);
Route::get('/contato-post',[ApiFreightController::class, 'postFreight']);

//test
Route::get('/cursos', function () {
    return view('site.contact');
})->name('site.contact');

// ecommerce
ClientRoute::routes();
ProductRoute::routes();
UserEcommerceRoute::routes();
//Route::get('/product', function () {
//    return view('site.ecommerce.product');
//});

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

Route::group(['middleware'=> ['auth']], function () {
    NavbarRoute::routes();
    TopbarRoute::routes();
    PagesRoute::routes();
    SectionOneRoute::routes();
    SectionTwoRoute::routes();
    SectionThreeRoute::routes();
    ProgressRoute::routes();
    ScoreRoute::routes();
    SectionFourRoute::routes();
    TitleRoute::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logic', [App\Http\Controllers\Logic\LogicController::class, 'larger']);

Route::prefix('admin')->group(function() {
    Route::get('/login',[App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('logout/', [App\Http\Controllers\Auth\AdminLoginController::class,'logout'])->name('admin.logout');
    Route::get('/', [App\Http\Controllers\Auth\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin-register', [App\Http\Controllers\Auth\AdminRegisterController::class, 'adminRegister'])->name('admin_register');
    Route::match(['get', 'post'], 'register-admin/add', [AdminRegisterController::class, 'addRegister'])->name('add_register');

});
