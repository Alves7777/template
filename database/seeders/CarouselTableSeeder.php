<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\Carousel\Carousel;
use App\Models\SectionFour\SectionFour;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class CarouselTableSeeder extends Seeder
{

    public function run()
    {
        for ($i = 1;$i <= AbstractView::QTD_SEEDER['qtd_4']; $i++) {
            Carousel::create([
                'background' => '',
                'photo' => new UploadedFile(public_path() . '/storage/photos/logo.jpeg', 'temp'),
                'title' => "teste",
                'sub_title' => "teste_sub{$i}",
                'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
            ]);
        }
    }

}
