<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\SectionTwo\SectionTwo;
use Illuminate\Database\Seeder;

class SectionTwoTableSeeder extends Seeder
{
    const QUANTITY = 4;

    public function run()
    {
        // Arrays para Alves Imported
        $alves1 = [
            "icon" => "bx bxl-dribbble",
            "color_icon" => "#f7052900",
            "title" => "Campeonato de Futebol",
            "description" => "Todos os times de futebol europeu e brasileiro.",
            "url" => "https://www.google.com",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ];

        $alves2 = [
            "icon" => "bx bx-file",
            "color_icon" => "#f7052900",
            "title" => "Campeonato da NFL",
            "description" => "Melhores times do futebol americano, com a melhor qualidade.",
            "url" => "https://www.google.com",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ];

        $alves3 = [
            "icon" => "bx bx-tachometer",
            "color_icon" => "#f7052900",
            "title" => "Campeonato de NBA",
            "description" => "Acompanhe os melhores jogadores da NBA. Camisas exclusivas.",
            "url" => "https://www.google.com",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ];

        $alves4 = [
            "icon" => "bx bx-world",
            "color_icon" => "#f7052900",
            "title" => "NHL",
            "description" => "Temos camisas da NHL também, pra quem é fã do rock do gelo.",
            "url" => "https://www.google.com",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ];

        // Arrays para AM Pratas
        $ampratas1 = [
            "icon" => "bx bxs-diamond",
            "color_icon" => "#111111",
            "title" => "Pratas Exclusivas",
            "description" => "Descubra joias de prata únicas, feitas para brilhar em qualquer ocasião.",
            "url" => "https://ampratas.com.br/exclusivas",
            'client_id' => AbstractView::AM_PRATAS,
        ];

        $ampratas2 = [
            "icon" => "bx bxs-gift",
            "color_icon" => "#222222",
            "title" => "Presentes Sofisticados",
            "description" => "Surpreenda quem você ama com presentes de prata elegantes e modernos.",
            "url" => "https://ampratas.com.br/presentes",
            'client_id' => AbstractView::AM_PRATAS,
        ];

        $ampratas3 = [
            "icon" => "bx bxs-star",
            "color_icon" => "#333333",
            "title" => "Coleção Black",
            "description" => "Peças escuras e sofisticadas para quem busca exclusividade e estilo.",
            "url" => "https://ampratas.com.br/black",
            'client_id' => AbstractView::AM_PRATAS,
        ];

        $ampratas4 = [
            "icon" => "bx bxs-heart",
            "color_icon" => "#000000",
            "title" => "Amor em Prata",
            "description" => "Demonstre seu carinho com joias de prata que eternizam momentos.",
            "url" => "https://ampratas.com.br/amor",
            'client_id' => AbstractView::AM_PRATAS,
        ];

        // Salvar todos
        foreach ([$alves1, $alves2, $alves3, $alves4, $ampratas1, $ampratas2, $ampratas3, $ampratas4] as $item) {
            $sectionTwo = new SectionTwo($item);
            $sectionTwo->save();
        }
    }

}
