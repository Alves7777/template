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
        // Alves Imported
        for ($i = 1;$i <= AbstractView::QTD_SEEDER['qtd_1']; $i++) {
            Title::create([
                'title' => "Testando {$i}",
                'color_title' => "#dd0d0d",
                'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita.",
                'client_id' => AbstractView::DEFAULT_CLIENT_ID,
            ]);
        }

        // AM Pratas
        for ($i = 1;$i <= AbstractView::QTD_SEEDER['qtd_1']; $i++) {
            Title::create([
                'title' => "Joia de Prata {$i}",
                'color_title' => "#111111",
                'text' => "Conheça nossas joias exclusivas em prata legítima, feitas para brilhar.",
                'client_id' => AbstractView::AM_PRATAS,
            ]);
        }
    }

}
