<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\SectionSeven\SectionSeven;
use App\Models\SectionSix\SectionSix;
use App\Services\SectionSeven\SectionSevenService;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class SectionSevenTableSeeder extends Seeder
{

    CONST QUANTITY = 8;

    private SectionSevenService $sectionSevenService;

    public function __construct(SectionSevenService $sectionSevenService)
    {
        $this->sectionSevenService = $sectionSevenService;
    }

    public function run()
    {
        for ($i = 1;$i <= self::QUANTITY; $i++) {
            $this->sectionSevenService->create([
                'title' => "Teste{$i}",
                'color_title' => "#FD7E14",
                'text'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s',
                'sub_title' => 'isso vai dar certo',
                'sub_text'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            ]);
        }
    }

}
