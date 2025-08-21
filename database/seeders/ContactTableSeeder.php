<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\Contact\Contact;
use App\Models\SectionSix\SectionSix;
use App\Services\Contact\ContactService;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class ContactTableSeeder extends Seeder
{

    CONST QUANTITY = 8;

    private ContactService $sectionSevenService;

    public function __construct(ContactService $sectionSevenService)
    {
        $this->sectionSevenService = $sectionSevenService;
    }

    public function run()
    {
        for ($i = 1;$i <= self::QUANTITY; $i++) {
            $this->sectionSevenService->create([
                'icon'=> "bi bi-emoji-smile",
                'title'=> "teste {$i}",
                'text'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            ]);
        }
    }

}
