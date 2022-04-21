<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // \App\Mod els\User::factory(10)->create();
        $this->call([
              TopbarTableSeeder::class,
              NavbarTableSeeder::class,
              SectionOneTableSeeder::class,
              SectionTwoTableSeeder::class,
              SectionThreeTableSeeder::class,                                                                                                                 ProgressTableSeeder::class,
              ScoreTableSeeder::class,
              SectionFourTableSeeder::class,
              CarouselTableSeeder::class,
              TitleTableSeeder::class,
              CategoryTablerSeeder::class,
              ProductTablerSeeder::class,
              SectionFiveTableSeeder::class,
              SectionSixTableSeeder::class,
              SectionSevenTableSeeder::class,
              ContactTableSeeder::class,
              UserTableSeeder::class,
          //  PostTableSeeder::class,
        ]);

    }
}
