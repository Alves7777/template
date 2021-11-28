<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\Score\Score;
use Illuminate\Database\Seeder;

class ScoreTableSeeder extends Seeder
{

    public function run()
    {

        for ($i = 1; $i <= AbstractView::QTD_SEEDER['qtd_3']; $i++) {
            Score::create([
                'icon' => "bi bi-emoji-smile",
                'number' => "15{$i}",
                'name' => "clientes",
            ]);
        }
    }

}


