<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // \App\Mod els\User::factory(10)->create();
        $this->call(TopbarTableSeeder::class);
        $this->call(NavbarTableSeeder::class);
        $this->call(SectionOneTableSeeder::class);

    }
}
