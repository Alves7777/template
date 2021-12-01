<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\SectionFour\SectionFour;
use App\Models\Title\Title;
use Illuminate\Database\Seeder;

class TitleTableSeeder extends Seeder
{

    public function run()
    {
        for ($i = 1;$i <= AbstractView::QTD_SEEDER['qtd_1']; $i++) {
            Title::create([
                'title' => "Testando {$i}",
                'color_title' => "#dd0d0d",
                'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita.",
            ]);
        }
    }

}
