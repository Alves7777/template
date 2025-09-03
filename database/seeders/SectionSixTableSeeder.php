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
        // Alves Imported
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

        // AM Pratas
        $this->sectionSix->create([
            'sub_title' => "Equipe AM Pratas",
            'sub_text' => "#111111",
            'link_twitter' => "https://twitter.com/ampratas",
            'link_facebook' => "https://facebook.com/ampratas",
            'link_instagram' => "https://instagram.com/ampratas",
            'link_linkedin' => "https://linkedin.com/company/ampratas",
            'image' => new UploadedFile("photos/ampratas/ampratas(1).jpeg", 'temp'),
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $this->sectionSix->create([
            'sub_title' => "Atendimento Especializado",
            'sub_text' => "#222222",
            'link_twitter' => "https://twitter.com/ampratas",
            'link_facebook' => "https://facebook.com/ampratas",
            'link_instagram' => "https://instagram.com/ampratas",
            'link_linkedin' => "https://linkedin.com/company/ampratas",
            'image' => new UploadedFile("photos/ampratas/ampratas(2).jpeg", 'temp'),
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $this->sectionSix->create([
            'sub_title' => "Joias com Garantia",
            'sub_text' => "#333333",
            'link_twitter' => "https://twitter.com/ampratas",
            'link_facebook' => "https://facebook.com/ampratas",
            'link_instagram' => "https://instagram.com/ampratas",
            'link_linkedin' => "https://linkedin.com/company/ampratas",
            'image' => new UploadedFile("photos/ampratas/ampratas(3).jpeg", 'temp'),
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $this->sectionSix->create([
            'sub_title' => "Entrega Rápida",
            'sub_text' => "#000000",
            'link_twitter' => "https://twitter.com/ampratas",
            'link_facebook' => "https://facebook.com/ampratas",
            'link_instagram' => "https://instagram.com/ampratas",
            'link_linkedin' => "https://linkedin.com/company/ampratas",
            'image' => new UploadedFile("photos/ampratas/ampratas(4).jpeg", 'temp'),
            'client_id' => AbstractView::AM_PRATAS,
        ]);
    }

}
