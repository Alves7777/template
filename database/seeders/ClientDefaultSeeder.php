<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientDefaultSeeder extends Seeder
{
    public function run()
    {
        // Cria um cliente default se não existir
        $client = Client::firstOrCreate([
            'slug' => 'default-client',
        ], [
            'name' => 'Cliente Default',
            'template' => 'default',
        ]);
    }
}
