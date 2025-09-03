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

        // Alves Imported
        $sectionFour->create([
            'title' => "Check our Services",
            'color_title' => "#FD7E14",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita.",
            'icon' => "bx bx-store-alt",
            'color_icon' => "#dd0d0d",
            'sub_text' => "Todos os tipos de camisas, estilo torcedor, agasalhos, shorts e caps de diversos times, você entra na AlvesImported",
            'sub_title' => "Tipos de Camisa",
            'url' => "www.google.com.br",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $sectionFour->create([
            'title' => "Check our Services",
            'color_title' => "#FD7E14",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita.",
            'icon' => "bx bx-store-alt",
            'color_icon' => "#dd0d0d",
            'sub_text' => "Personalize sua camisa com o nome e número de sua preferência",
            'sub_title' => "Personalizar camisa",
            'url' => "www.google.com.br",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $sectionFour->create([
            'title' => "Check our Services",
            'color_title' => "#FD7E14",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita.",
            'icon' => "bx bx-store-alt",
            'color_icon' => "#dd0d0d",
            'sub_text' => "Entregamos para todo o Brasil. Aceitamos cartões, PIX, PayPal e PicPay",
            'sub_title' => "Entregas",
            'url' => "www.google.com.br",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);

        // AM Pratas
        $sectionFour->create([
            'title' => "Conheça nossas Joias",
            'color_title' => "#111111",
            'text' => "Pratas legítimas, design sofisticado e garantia de procedência.",
            'icon' => "bx bxs-diamond",
            'color_icon' => "#222222",
            'sub_text' => "Pulseiras, correntes, anéis e pingentes para todos os estilos.",
            'sub_title' => "Variedade em Prata",
            'url' => "https://ampratas.com.br/joias",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $sectionFour->create([
            'title' => "Personalize sua Joia",
            'color_title' => "#222222",
            'text' => "Gravação exclusiva para eternizar momentos especiais.",
            'icon' => "bx bxs-heart",
            'color_icon' => "#333333",
            'sub_text' => "Personalize com nomes, datas ou frases.",
            'sub_title' => "Gravação Personalizada",
            'url' => "https://ampratas.com.br/personalize",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $sectionFour->create([
            'title' => "Entrega Segura",
            'color_title' => "#000000",
            'text' => "Enviamos para todo o Brasil com seguro e rastreio.",
            'icon' => "bx bxs-truck",
            'color_icon' => "#111111",
            'sub_text' => "Receba sua joia com total segurança e agilidade.",
            'sub_title' => "Frete Rápido",
            'url' => "https://ampratas.com.br/entrega",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
    }

}
