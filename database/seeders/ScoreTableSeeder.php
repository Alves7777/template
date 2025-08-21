<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\Score\Score;
use Illuminate\Database\Seeder;

class ScoreTableSeeder extends Seeder
{

    public function run()
    {
        $score = new Score();
        $score->create([
            'icon' => "bi bi-emoji-smile",
            'number' => "50",
            'name' => "Média de clientes por mês",
            'client_id' => 1
        ]);
        $score->create([
            'icon' => "bi bi-emoji-smile",
            'number' => "5",
            'name' => "Vendedores",
            'client_id' => 1
        ]);
        $score->create([
            'icon' => "bi bi-emoji-smile",
            'number' => "4",
            'name' => "Campeonantos",
            'client_id' => 1
        ]);
        $score->create([
            'icon' => "bi bi-emoji-smile",
            'number' => "24",
            'name' => "Atendimento 24hrs",
            'client_id' => 1
        ]);
    }

}


