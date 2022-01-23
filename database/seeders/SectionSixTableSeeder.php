<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\SectionSix\SectionSix;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class SectionSixTableSeeder extends Seeder
{

    public function run()
    {
        for ($i = 1;$i <= AbstractView::QTD_SEEDER['qtd_3']; $i++) {
            SectionSix::create([
                'sub_title' => "Teste{$i}",
                'sub_text' => "#FD7E14",
                'link_twitter' => "www.google.com.br",
                'link_facebook' => "www.google.com.br",
                'link_instagram' => "www.google.com.br",
                'link_linkedin' => "www.google.com.br",
                'image' => new UploadedFile(public_path() . "/storage/photos/ducati.png", 'temp'),

            ]);
        }
    }

}
