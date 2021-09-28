<?php

namespace Database\Seeders;

use App\Services\Topbar\TopbarService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopbarTableSeeder extends Seeder
{
    private TopbarService $topbarService;

    public function __construct(TopbarService $topbarService)
    {
        $this->topbarService = $topbarService;
    }

    public function run()
    {
        $this->topbarService->create([
            'icon_email' => 'bi bi-envelope-fill',
            'email' => 'email@email.com',
            'icon_phone' => 'bi bi-telephone-fill',
            'phone' => '(85)99429-8785',
            'color_top_bar' => '#FF0000',
            'icon_1' => 'bi bi-instagram',
            'icon_2' => 'bi bi-facebook',
            'icon_3' => 'bi bi-linkedin',
            'icon_4' => 'bi bi-twitter',
            'link_email' => 'https://www.google.com/',
            'link_phone' => 'https://www.google.com/',
            'link_icon_1' => 'https://www.instagram.com/',
            'link_icon_2' => 'https://www.facebook.com/',
            'link_icon_3' => 'https://www.linkedin.com/',
            'link_icon_4' => 'https://twitter.com/',
        ]);
    }

}


