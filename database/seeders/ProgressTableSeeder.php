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

        $progress->create([
            'progress_name' => "CAMISAS FUTEBOL - VENDIDAS",
            'percentage' => 100,
            'client_id' => 1
        ]);
        $progress->create([
            'progress_name' => "CAMISAS BASQUETES - VENDIDAS",
            'percentage' => 80,
            'client_id' => 1
        ]);
        $progress->create([
            'progress_name' => "CAMISAS FUTEBOL AMERICANO - VENDIDAS",
            'percentage' => 70,
            'client_id' => 1
        ]);
        $progress->create([
            'progress_name' => "CAMISAS ROCK DO GELO - VENDIDAS",
            'percentage' => 50,
            'client_id' => 1
        ]);
    }
}
