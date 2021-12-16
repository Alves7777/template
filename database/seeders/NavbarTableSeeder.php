<?php

namespace Database\Seeders;

use App\Services\Navbar\NavbarService;
use App\Traits\UploadFile;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class NavbarTableSeeder extends Seeder
{
    private NavbarService $navbarService;

    public function __construct(NavbarService $navbarService)
    {
        $this->navbarService = $navbarService;
    }

    public function run()
    {
        $this->navbarService->create([
            'logo'    => new UploadedFile(public_path() . '/storage/photos/logo.jpeg', 'temp'),
            'title_1' => 'Título 1',
            'title_2' => 'Título 2',
            'title_3' => 'Título 3',
            'title_4' => 'Título 4',
            'title_5' => 'Título 5',
            'title_6' => 'Ecommerce',
            'title_7' => 'Produtos',
            'title_8' => 'Categorias',
            'title_9' => 'Registrar Usuário',
            'title_10' => 'Login Ecommerce',
            'title_11' => 'fas fa-shopping-cart',
            'link_title_1' => 'page_1',
            'link_title_2' => 'page_2',
            'link_title_3' => 'page_3',
            'link_title_4' => 'page_4',
            'link_title_5' => 'page_5',
            'link_title_6' => 'Ecommerce',
            'link_title_7' => 'product',
            'link_title_8' => 'category',
            'link_title_9' => 'eco_register',
            'link_title_10' => 'user-ecommerce',
            'link_title_11' => 'view_cart',

        ]);
    }

}
