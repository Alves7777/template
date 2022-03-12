<?php

namespace Database\Seeders;

use App\Services\SectionSix\SectionSixService;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class SectionSixTableSeeder extends Seeder
{

    private SectionSixService $sectionSixService;

    public function __construct(SectionSixService $sectionSixService)
    {
        $this->sectionSixService = $sectionSixService;
    }

    public function run()
    {
        $this->sectionSixService->create([
            'sub_title' => "Teste",
            'sub_text' => "#FD7E14",
            'link_twitter' => "www.google.com.br",
            'link_facebook' => "www.google.com.br",
            'link_instagram' => "www.google.com.br",
            'link_linkedin' => "www.google.com.br",
            'image' => new UploadedFile(public_path() . "/storage/photos/gabrielalpi.jpg", 'temp'),
        ]);

        $this->sectionSixService->create([
            'sub_title' => "Teste",
            'sub_text' => "#FD7E14",
            'link_twitter' => "www.google.com.br",
            'link_facebook' => "www.google.com.br",
            'link_instagram' => "www.google.com.br",
            'link_linkedin' => "www.google.com.br",
            'image' => new UploadedFile(public_path() . "/storage/photos/gleicealpi.jpg", 'temp'),
        ]);

        $this->sectionSixService->create([
            'sub_title' => "Teste",
            'sub_text' => "#FD7E14",
            'link_twitter' => "www.google.com.br",
            'link_facebook' => "www.google.com.br",
            'link_instagram' => "www.google.com.br",
            'link_linkedin' => "www.google.com.br",
            'image' => new UploadedFile(public_path() . "/storage/photos/gleicealpi1.jpg", 'temp'),
        ]);

        $this->sectionSixService->create([
            'sub_title' => "Teste",
            'sub_text' => "#FD7E14",
            'link_twitter' => "www.google.com.br",
            'link_facebook' => "www.google.com.br",
            'link_instagram' => "www.google.com.br",
            'link_linkedin' => "www.google.com.br",
            'image' => new UploadedFile(public_path() . "/storage/photos/basebol.jpg", 'temp'),
        ]);

        $this->sectionSixService->create([
            'sub_title' => "Teste",
            'sub_text' => "#FD7E14",
            'link_twitter' => "www.google.com.br",
            'link_facebook' => "www.google.com.br",
            'link_instagram' => "www.google.com.br",
            'link_linkedin' => "www.google.com.br",
            'image' => new UploadedFile(public_path() . "/storage/photos/biel.jpg", 'temp'),
        ]);
    }

}
