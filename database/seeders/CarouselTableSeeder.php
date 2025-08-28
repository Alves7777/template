<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\Carousel\Carousel;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class CarouselTableSeeder extends Seeder
{

    private Carousel $collectionsImages;

    public function __construct(Carousel $collectionsImages)
    {
        $this->collectionsImages = $collectionsImages;
    }

    public function run()
    {
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/alpi.jpg', 'temp'),
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
            'title' => "Ut possimus",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/alpi.jpg', 'temp'),
            'background' => new UploadedFile('photos/nba.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/alpi2.jpg', 'temp'),
            'background' => new UploadedFile('photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/alpi3.jpg', 'temp'),
            'background' => new UploadedFile('photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/basebol.jpg', 'temp'),
            'background' => new UploadedFile('photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/basebol.jpg', 'temp'),
            'background' => new UploadedFile('photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/basquete.jpeg', 'temp'),
            'background' => new UploadedFile('photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/palmeiras.jpg', 'temp'),
            'background' => new UploadedFile('photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/gabrielalpi.jpg', 'temp'),
            'background' => new UploadedFile('photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
            'client_id' => AbstractView::DEFAULT_CLIENT_ID,
        ]);
    }

}
