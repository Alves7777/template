<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\Progress\Progress;
use Illuminate\Database\Seeder;

class ProgressTableSeeder extends Seeder
{
    public function run()
    {
        $qtd = AbstractView::QTD_SEEDER['qtd_1'];
        $progress = new Progress();

        for ($i = 1; $i <= $qtd;  $i++) {
            $progress->create([
                'progress_name' => "TESTE {$i}",
                'percentage' => 10 + $i
            ]);
        }
    }
}
