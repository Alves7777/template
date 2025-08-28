<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\SectionFive\SectionFive;
use App\Services\SectionFive\SectionFiveService;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class SectionFiveTableSeeder extends Seeder
{

    private SectionFive $sectionFive;

    public function __construct(SectionFive $sectionFive)
    {
        $this->sectionFive = $sectionFive;
    }

    public function run()
    {
        for ($i = 1;$i <= AbstractView::QTD_SEEDER['qtd_1']; $i++) {
            $this->sectionFive->create([
                'title' => "Teste{$i}",
                'color_title' => "#FD7E14",
                'url' => "www.google.com.br",
                'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita.",
                'text_one' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
                'background' => new UploadedFile("photos/bayerngol.jpeg", 'temp'),
                'image' => new UploadedFile("photos/foto.png", 'temp'),
                'client_id' => AbstractView::DEFAULT_CLIENT_ID,
            ]);
        }
    }

}
