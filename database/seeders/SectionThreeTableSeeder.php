<?php

namespace Database\Seeders;

use App\Services\SectionThree\SectionThreeService;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class SectionThreeTableSeeder extends Seeder
{
    private SectionThreeService $sectionThreeService;

    public function __construct(SectionThreeService $sectionThreeService)
    {
        $this->sectionThreeService = $sectionThreeService;
    }

    public function run()
    {
        $this->sectionThreeService->create([
            'title'=> 'Camisa do Barcelona estilo torcedor',
            'color_icon'=> '#FD7E14',
            'text' => '',
            'title_two' => 'Camisa que serve para todos os gostos para todos os tamanhos',
            'text_two' => '',
            'sub_title' => 'Camisa de Futebol unisex',
            'sub_text' => 'Produtos esportivos da melhor qualidade;',
            'icon' => 'bx bx-store-alt',
            'text_three' => '',
            'photo' => new UploadedFile(public_path() . '/storage/photos/gleicealpi.jpg', 'temp')

        ]);
    }

}
