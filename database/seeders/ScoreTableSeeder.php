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
        // Alves Imported
        $score->create([
            'icon' => "bi bi-emoji-smile",
            'number' => "50",
            'name' => "Média de clientes por mês",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $score->create([
            'icon' => "bi bi-emoji-smile",
            'number' => "5",
            'name' => "Vendedores",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $score->create([
            'icon' => "bi bi-emoji-smile",
            'number' => "4",
            'name' => "Campeonantos",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $score->create([
            'icon' => "bi bi-emoji-smile",
            'number' => "24",
            'name' => "Atendimento 24hrs",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);

        // AM Pratas
        $score->create([
            'icon' => "bi bi-gem",
            'number' => "120",
            'name' => "Joias vendidas por mês",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $score->create([
            'icon' => "bi bi-person-badge",
            'number' => "3",
            'name' => "Especialistas em prata",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $score->create([
            'icon' => "bi bi-star-fill",
            'number' => "5",
            'name' => "Anos de tradição",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $score->create([
            'icon' => "bi bi-clock-history",
            'number' => "7",
            'name' => "Dias por semana de atendimento",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
    }

}


