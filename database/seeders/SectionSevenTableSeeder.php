<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use Illuminate\Database\Seeder;
use App\Models\SectionSeven\SectionSeven;

class SectionSevenTableSeeder extends Seeder
{

    CONST QUANTITY = 8;

    private SectionSeven $sectionSeven;

    public function __construct(SectionSeven $sectionSeven)
    {
        $this->sectionSeven = $sectionSeven;
    }

    public function run()
    {
        for ($i = 1;$i <= self::QUANTITY; $i++) {
            $this->sectionSeven->create([
                'title' => "Teste{$i}",
                'color_title' => "#FD7E14",
                'text'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s',
                'sub_title' => 'isso vai dar certo',
                'sub_text'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'client_id' => AbstractView::DEFAULT_CLIENT_ID,
            ]);
        }
    }

}
