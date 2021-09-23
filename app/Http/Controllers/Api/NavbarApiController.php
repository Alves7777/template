<?php

namespace App\Http\Controllers\Api;

use App\Models\NavBar\Navbar;
use App\Services\Navbar\NavbarService;

class NavbarApiController
{
    private Navbar $navbar;
    private NavbarService $navbarService;

    public function __construct(Navbar $navbar, NavbarService $navbarService)
    {
        $this->navbar = $navbar;
        $this->navbarService = $navbarService;
    }

}
