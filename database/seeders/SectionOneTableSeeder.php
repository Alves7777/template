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
            'image' => new UploadedFile(public_path() . '/storage/photos/bay.png', 'temp'),
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
    }

}
