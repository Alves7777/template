<?php

namespace App\Http\Controllers;

use App\Models\NavBar\Navbar;
use App\Models\SectionOne\SectionOne;
use App\Models\Topbar\Topbar;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function __construct()
    {
        View::share( 'navbar', Navbar::all());
        View::share( 'topbar', Topbar::all());
        View::share( 'sectionone', SectionOne::all());
    }
}
