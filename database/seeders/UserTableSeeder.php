<?php

namespace Database\Seeders;

use App\Models\Client\Client;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $clients = [
            [
                'name'  => 'Alves Imported',
                'slug'  => 'alvesimported',
                'phone' => '85994298785',
                'user'  => [
                    'name'     => 'Lucas',
                    'email'    => 'lucas@gmail.com',
                    'password' => bcrypt('123456'),
                ],
            ],
            [
                'name'  => 'AM Pratas',
                'slug'  => 'ampratas',
                'phone' => '85994298785',
                'user'  => [
                    'name'     => 'AMpratas',
                    'email'    => 'ampratas@gmail.com',
                    'password' => bcrypt('123456'),
                ],
            ],
        ];

        foreach ($clients as $clientData) {
            $client = Client::create([
                'name'  => $clientData['name'],
                'slug'  => $clientData['slug'],
                'phone' => $clientData['phone'],
            ]);

            User::create([
                'name'      => $clientData['user']['name'],
                'email'     => $clientData['user']['email'],
                'password'  => $clientData['user']['password'],
                'client_id' => $client->id,
            ]);
        }
    }
}
