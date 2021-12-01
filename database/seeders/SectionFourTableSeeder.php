<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\SectionFour\SectionFour;
use Illuminate\Database\Seeder;

class SectionFourTableSeeder extends Seeder
{

    public function run()
    {
        for ($i = 1;$i <= AbstractView::QTD_SEEDER['qtd_4']; $i++) {
            SectionFour::create([
                'title' => "Check our Services",
                'color_title' => "#FD7E14",
                'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita.",
                'icon' => "bx bx-store-alt",
                'color_icon' => "#dd0d0d",
                'sub_text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
                'sub_title' => "testando{$i}",
                'url' => "www.google.com.br"

            ]);
        }
    }

}
