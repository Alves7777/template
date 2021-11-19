<?php

namespace Database\Seeders;

use App\Services\SectionOne\SectionOneService;
use App\Services\SectionThree\SectionThreeService;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class SectionThreeTableSeeder extends Seeder
{
    private SectionThreeService $sectionThreeService;

    public function __construct(SectionThreeService $sectionThreeService)
    {
        $this->sectionThreeService = $sectionThreeService;
    }

    public function run()
    {
        $this->sectionThreeService->create([
            'title'=> 'Find Out More About Us',
            'color_icon'=> '#FD7E14',
            'text' => 'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.',
            'title_two' => 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
            'text_two' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'sub_title' => 'Ullamco laboris nisi ut aliquip consequat',
            'sub_text' => 'Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade',
            'icon' => 'bx bx-store-alt',
            'text_three' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'photo' => new UploadedFile(public_path() . '/storage/photos/bay.png', 'temp')

        ]);
    }

}
