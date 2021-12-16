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
        $this->call(SectionTwoTableSeeder::class);
        $this->call(SectionThreeTableSeeder::class);
        $this->call(ProgressTableSeeder::class);
        $this->call(ScoreTableSeeder::class);
        $this->call(SectionFourTableSeeder::class);
        $this->call(CarouselTableSeeder::class);
        $this->call(TitleTableSeeder::class);
//        $this->call(CategoryTablerSeeder::class);
        $this->call(ProductTablerSeeder::class);

    }
}
