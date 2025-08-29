<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\Topbar\Topbar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopbarTableSeeder extends Seeder
{
    private Topbar $topbar;

    public function __construct(Topbar $topbar)
    {
        $this->topbar = $topbar;
    }

    public function run()
    {
        $this->topbar->create([
            'icon_email' => 'bi bi-envelope-fill',
            'email' => 'alvesimportedproducts@gmail.com',
            'icon_phone' => 'bi bi-telephone-fill',
            'phone' => '(85)99429-8785',
            'color_top_bar' => '#FF0000',
            'icon_1' => 'bi bi-instagram',
            'icon_2' => 'bi bi-facebook',
            'icon_3' => 'bi bi-linkedin',
            'icon_4' => 'bi bi-twitter',
            'link_email' => 'https://www.google.com/',
            'link_phone' => 'https://wa.me/5585994298785?text=Gostaria+falar+com+um+vendedor...',
            'link_icon_1' => 'https://www.instagram.com/alvesimported',
            'link_icon_2' => 'https://www.facebook.com/AlvesImportedProducts',
            'link_icon_3' => 'https://www.linkedin.com/',
            'link_icon_4' => 'https://twitter.com/',
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);

        $this->topbar->create([
            'icon_email' => 'bi bi-envelope-fill',
            'email' => 'alvesimportedproducts@gmail.com',
            'icon_phone' => 'bi bi-telephone-fill',
            'phone' => '(85)99674-4989',
            'color_top_bar' => '#FF0000',
            'icon_1' => 'bi bi-instagram',
            'icon_2' => 'bi bi-facebook',
            'icon_3' => 'bi bi-linkedin',
            'icon_4' => 'bi bi-twitter',
            'link_email' => 'https://www.google.com/',
            'link_phone' => 'https://wa.me/5585996744989?text=Gostaria+falar+com+um+vendedor...',
            'link_icon_1' => 'https://www.instagram.com/ampratass__',
            'link_icon_2' => 'https://www.facebook.com/ampratasoficial',
            'link_icon_3' => 'https://www.linkedin.com/',
            'link_icon_4' => 'https://twitter.com/',
            'client_id' => AbstractView::AM_PRATAS,
        ]);
    }

}


