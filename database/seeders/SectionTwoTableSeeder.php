<?php

namespace Database\Seeders;

use App\Models\SectionTwo\SectionTwo;
use Illuminate\Database\Seeder;

class SectionTwoTableSeeder extends Seeder
{
    const QUANTITY = 4;

    public function run()
    {
        $array = [
            "icon" => "bx bxl-dribbble",
            "color_icon" => "#f7052900",
            "title" => "Campeonado de Futebol",
            "description" => "Todos os times de futebol europeu e brasileiro.",
            "url" => "https://www.google.com"
        ];

        $array1 = [
            "icon" => "bx bx-file",
            "color_icon" => "#f7052900",
            "title" => "Campeonado da NFL",
            "description" => "Melhores times do futebol americano, com a melhor qualidade.",
            "url" => "https://www.google.com",
        ];

        $array2 = [
            "icon" => "bx bx-tachometer",
            "color_icon" => "#f7052900",
            "title" => "Campeonado de NBA",
            "description" => "Acompanhar uns dos melhores jodadores da NBA LeBron James. Camisa exclusivas.",
            "url" => "https://www.google.com",
        ];

        $array3 = [
            "icon" => "bx bx-world",
            "color_icon" => "#f7052900",
            "title" => "NHL",
            "description" => "Temos camisas da NHL também, pra quem é fã do rock do gelo.",
            "url" => "https://www.google.com",
        ];

    $client = \App\Models\Client::where('slug', 'default-client')->first();
    $array['client_id'] = $client ? $client->id : 1;
    $array1['client_id'] = $client ? $client->id : 1;
    $array2['client_id'] = $client ? $client->id : 1;
    $array3['client_id'] = $client ? $client->id : 1;
    $sectionTwo = new SectionTwo($array);
    $sectionTwo->save();
    $sectionTwo = new SectionTwo($array1);
    $sectionTwo->save();
    $sectionTwo = new SectionTwo($array2);
    $sectionTwo->save();
    $sectionTwo = new SectionTwo($array3);
    $sectionTwo->save();
    }

}
