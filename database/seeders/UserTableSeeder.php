<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $client = \App\Models\Client::where('slug', 'default-client')->first();
        User::firstOrCreate(
            [
                'email' => 'lucas@gmail.com'
            ],
            [
                'name'     => 'Lucas',
                'is_master'    => true,
                'client_id' => $client ? $client->id : 1,
                'password' => bcrypt('123456')
            ]
        );
    }
}
