<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\SectionFive\SectionFive;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class SectionFiveTableSeeder extends Seeder
{

    public function run()
    {
        for ($i = 1;$i <= AbstractView::QTD_SEEDER['qtd_1']; $i++) {
            SectionFive::create([
                'title' => "Teste{$i}",
                'color_title' => "#FD7E14",
                'url' => "www.google.com.br",
                'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita.",
                'text_one' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
                'background' => new UploadedFile(public_path() . "/storage/photos/ducati.png", 'temp'),
                'image' => new UploadedFile(public_path() . "/storage/photos/foto.png", 'temp'),

            ]);
        }
    }

}
