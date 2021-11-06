<?php

namespace Database\Seeders;

use App\Models\SectionTwo\SectionTwo;
use Illuminate\Database\Seeder;

class SectionTwoTableSeeder extends Seeder
{
    const QUANTITY = 4;

    public function run()
    {
        for ($i = 1; $i <= self::QUANTITY; $i++) {
            SectionTwo::create([
                "icon" => "bx bx-world",
                "color_icon" => "#f7052900",
                "title" => "Section Two {$i}",
                "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. ",
                "url" => "https://www.google.com",
            ]);
        }
    }

}
