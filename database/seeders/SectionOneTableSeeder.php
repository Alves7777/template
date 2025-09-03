<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\SectionOne\SectionOne;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class SectionOneTableSeeder extends Seeder
{
    private SectionOne $sectionOne;

    public function __construct(SectionOne $sectionOne)
    {
        $this->sectionOne = $sectionOne;
    }

    public function run()
    {
        $this->sectionOne->create([
            'title'=> 'Alves Imported',
            'color_title'=> '#FD7E14',
            'description'=> 'A melhor loja esportiva que você já viu!',
            'text_button'=> 'Saiba Mais',
            'color_button'=> '#FF0000',
            'url_button'=> 'https://www.google.com.br/',
            'text_video'=> 'Veja o Vídeo',
            'url_video'=> 'https://www.youtube.com/watch?v=qv5VItfLWvY',
            'icon_video'=> 'bi bi-play-circle',
            'color_icon_video'=> '#FF0000',
            'color_text_video'=> '#000000',
            'image' => new UploadedFile('photos/bay.png', 'temp'),
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);

        $this->sectionOne->create([
            'title'=> 'AM Pratas',
            'color_title'=> '#000000',
            'description'=> 'A melhor loja de pratas que você já viu!',
            'text_button'=> 'Saiba Mais',
            'color_button'=> '#000000',
            'url_button'=> 'https://www.google.com.br/',
            'text_video'=> 'Veja o Vídeo',
            'url_video'=> 'https://youtu.be/G0F8Ienh914',
            'icon_video'=> 'bi bi-play-circle',
            'color_icon_video'=> '#4f4040ff',
            'color_text_video'=> '#000000',
            'image' => new UploadedFile('photos/ampratas/submenu_prata.png', 'temp'), // ajuste o nome do arquivo conforme necessário
            'client_id' => AbstractView::AM_PRATAS,
        ]);
    }

}
