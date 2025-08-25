<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Master\Master;

class MasterTableSeeder extends Seeder
{
    public function run(): void
    {
        Master::factory()->count(10)->create();
    }
}
