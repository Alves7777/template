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
            'percentage' => 100
        ]);
        $progress->create([
            'progress_name' => "CAMISAS BASQUETES - VENDIDAS",
            'percentage' => 80
        ]);
        $progress->create([
            'progress_name' => "CAMISAS FUTEBOL AMERICANO - VENDIDAS",
            'percentage' => 70
        ]);
        $progress->create([
            'progress_name' => "CAMISAS ROCK DO GELO - VENDIDAS",
            'percentage' => 50
        ]);
    }
}
