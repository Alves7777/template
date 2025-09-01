<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use App\Models\SectionThree\SectionThree;

class SectionThreeTableSeeder extends Seeder
{
    private SectionThree $sectionThree;

    public function __construct(SectionThree $sectionThree)
    {
        $this->sectionThree = $sectionThree;
    }

    public function run()
    {
        // Alves Imported
        $this->sectionThree->create([
            'title'=> 'Camisa do Barcelona estilo torcedor',
            'color_icon'=> '#FD7E14',
            'text' => '',
            'title_two' => 'Camisa que serve para todos os gostos para todos os tamanhos',
            'text_two' => '',
            'sub_title' => 'Camisa de Futebol unisex',
            'sub_text' => 'Produtos esportivos da melhor qualidade;',
            'icon' => 'bx bx-store-alt',
            'text_three' => '',
            'photo' => new UploadedFile('photos/gleicealpi.jpg', 'temp'),
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);

        // AM Pratas
        $this->sectionThree->create([
            'title'=> 'Pulseira de Prata Masculina',
            'color_icon'=> '#111111',
            'text' => 'Design moderno e acabamento impecável.',
            'title_two' => 'Elegância para todos os estilos',
            'text_two' => 'Acessório perfeito para qualquer ocasião.',
            'sub_title' => 'Prata legítima 925',
            'sub_text' => 'Joias de prata com garantia e procedência.',
            'icon' => 'bx bxs-diamond',
            'text_three' => 'Destaque-se com sofisticação.',
            'photo' => new UploadedFile('photos/ampratas/ampratas(1).jpeg', 'temp'),
            'client_id' => AbstractView::AM_PRATAS,
        ]);
    }

}
