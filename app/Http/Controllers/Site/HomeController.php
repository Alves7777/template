<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\ApisController;
use App\Http\Controllers\Controller;

//use App\Services\Navbar\TopbarService;

class HomeController extends Controller
{
    private ApisController $apiController;

    public function __construct(ApisController $apiController)
    {
        parent::__construct();
        $this->apiController = $apiController;
    }

    public function index()
    {
        $getFreight = $this->apiController->ApiFreightGet();

        return view('site.home', compact('getFreight'));
    }

}
