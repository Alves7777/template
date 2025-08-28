<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use App\Models\SectionSix\SectionSix;


class SectionSixTableSeeder extends Seeder
{
    private SectionSix $sectionSix;

    public function __construct(SectionSix $sectionSix)
    {
        $this->sectionSix = $sectionSix;
    }

    public function run()
    {
        $this->sectionSix->create([
            'sub_title' => "Teste",
            'sub_text' => "#FD7E14",
            'link_twitter' => "www.google.com.br",
            'link_facebook' => "www.google.com.br",
            'link_instagram' => "www.google.com.br",
            'link_linkedin' => "www.google.com.br",
            'image' => new UploadedFile("photos/gabrielalpi.jpg", 'temp'),
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,

        ]);

        $this->sectionSix->create([
            'sub_title' => "Teste",
            'sub_text' => "#FD7E14",
            'link_twitter' => "www.google.com.br",
            'link_facebook' => "www.google.com.br",
            'link_instagram' => "www.google.com.br",
            'link_linkedin' => "www.google.com.br",
            'image' => new UploadedFile("photos/gleicealpi.jpg", 'temp'),
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);

        $this->sectionSix->create([
            'sub_title' => "Teste",
            'sub_text' => "#FD7E14",
            'link_twitter' => "www.google.com.br",
            'link_facebook' => "www.google.com.br",
            'link_instagram' => "www.google.com.br",
            'link_linkedin' => "www.google.com.br",
            'image' => new UploadedFile("photos/gleicealpi1.jpg", 'temp'),
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);

        $this->sectionSix->create([
            'sub_title' => "Teste",
            'sub_text' => "#FD7E14",
            'link_twitter' => "www.google.com.br",
            'link_facebook' => "www.google.com.br",
            'link_instagram' => "www.google.com.br",
            'link_linkedin' => "www.google.com.br",
            'image' => new UploadedFile("photos/basebol.jpg", 'temp'),
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);

        $this->sectionSix->create([
            'sub_title' => "Teste",
            'sub_text' => "#FD7E14",
            'link_twitter' => "www.google.com.br",
            'link_facebook' => "www.google.com.br",
            'link_instagram' => "www.google.com.br",
            'link_linkedin' => "www.google.com.br",
            'image' => new UploadedFile("photos/biel.jpg", 'temp'),
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
    }

}
