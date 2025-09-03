<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\Progress\Progress;
use Illuminate\Database\Seeder;

class ProgressTableSeeder extends Seeder
{
    public function run()
    {
        $progress = new Progress();

        // Alves Imported
        $progress->create([
            'progress_name' => "CAMISAS FUTEBOL - VENDIDAS",
            'percentage' => 100,
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $progress->create([
            'progress_name' => "CAMISAS BASQUETES - VENDIDAS",
            'percentage' => 80,
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $progress->create([
            'progress_name' => "CAMISAS FUTEBOL AMERICANO - VENDIDAS",
            'percentage' => 70,
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $progress->create([
            'progress_name' => "CAMISAS ROCK DO GELO - VENDIDAS",
            'percentage' => 50,
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);

        // AM Pratas
        $progress->create([
            'progress_name' => "PULSEIRAS DE PRATA - VENDIDAS",
            'percentage' => 95,
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $progress->create([
            'progress_name' => "CORRENTES DE PRATA - VENDIDAS",
            'percentage' => 85,
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $progress->create([
            'progress_name' => "ANEL DE PRATA - VENDIDOS",
            'percentage' => 75,
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $progress->create([
            'progress_name' => "PINGENTES DE PRATA - VENDIDOS",
            'percentage' => 60,
            'client_id' => AbstractView::AM_PRATAS,
        ]);
    }
}
