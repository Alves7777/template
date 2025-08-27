<?php

namespace Database\Seeders;

use App\Models\Client\Client;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $client = Client::create([
            'name'  => 'Alves Imported',
            'slug' => 'alvesimported',
            'phone' => '85994298785',
        ]);

        User::create([
            'name'     => 'Lucas',
            'email'    => 'lucas@gmail.com',
            'password' => bcrypt('123456'),
            'client_id' => $client->id,
        ]);
    }
}
