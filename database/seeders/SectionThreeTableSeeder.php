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
    }

}
