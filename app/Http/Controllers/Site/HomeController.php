<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
//use App\Services\Navbar\TopbarService;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('site.home');
    }

}
