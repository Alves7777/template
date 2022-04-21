<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\SectionFour\SectionFour;
use Illuminate\Database\Seeder;

class SectionFourTableSeeder extends Seeder
{

    public function run()
    {
        $sectionFour = new SectionFour();

        $sectionFour->create([
            'title' => "Check our Services",
            'color_title' => "#FD7E14",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita.",
            'icon' => "bx bx-store-alt",
            'color_icon' => "#dd0d0d",
            'sub_text' => "Todos os tipos de camisas, estilo torcedor, agasalhos, shorts e caps de diversos times, você entra na AlvesImported",
            'sub_title' => "Tipos de Camisa",
            'url' => "www.google.com.br"
        ]);
        $sectionFour->create([
            'title' => "Check our Services",
            'color_title' => "#FD7E14",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita.",
            'icon' => "bx bx-store-alt",
            'color_icon' => "#dd0d0d",
            'sub_text' => "Personalize sua camisa com o nome e número de sua preferência",
            'sub_title' => "Personalizar camisa",
            'url' => "www.google.com.br"
        ]);
        $sectionFour->create([
            'title' => "Check our Services",
            'color_title' => "#FD7E14",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita.",
            'icon' => "bx bx-store-alt",
            'color_icon' => "#dd0d0d",
            'sub_text' => "Entregamos para todo o Brasil. Aceitamos cartões, PIX, PayPal e PicPay",
            'sub_title' => "Entregas",
            'url' => "www.google.com.br"
        ]);
    }

}
