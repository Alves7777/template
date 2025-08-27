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

    private Contact $sectionSeven;

    public function __construct(Contact $sectionSeven)
    {
        $this->sectionSeven = $sectionSeven;
    }

    public function run()
    {
        for ($i = 1;$i <= self::QUANTITY; $i++) {
            $this->sectionSeven->create([
                'icon'=> "bi bi-emoji-smile",
                'title'=> "teste {$i}",
                'text'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'client_id' => AbstractView::DEFAULT_CLIENT_ID,
            ]);
        }
    }

}
