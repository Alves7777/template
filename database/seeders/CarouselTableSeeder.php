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
        // Alves Imported
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

        // AM Pratas
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/ampratas/ampratas(1).jpeg', 'temp'),
            'background' => new UploadedFile('photos/ampratas/ampratas(2).jpeg', 'temp'),
            'title' => "Joias Exclusivas",
            'sub_title' => "Prata legítima",
            'text' => "Conheça nossa coleção de joias em prata 925, feitas para brilhar.",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/ampratas/ampratas(3).jpeg', 'temp'),
            'background' => new UploadedFile('photos/ampratas/ampratas(4).jpeg', 'temp'),
            'title' => "Design Moderno",
            'sub_title' => "Sofisticação",
            'text' => "Peças exclusivas para quem valoriza elegância e autenticidade.",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/ampratas/ampratas(2).jpeg', 'temp'),
            'background' => new UploadedFile('photos/ampratas/ampratas(3).jpeg', 'temp'),
            'title' => "Presente Perfeito",
            'sub_title' => "Para todas as ocasiões",
            'text' => "Surpreenda quem você ama com uma joia AM Pratas.",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/ampratas/ampratas(2).jpeg', 'temp'),
            'background' => new UploadedFile('photos/ampratas/ampratas(3).jpeg', 'temp'),
            'title' => "Presente Perfeito",
            'sub_title' => "Para todas as ocasiões",
            'text' => "Surpreenda quem você ama com uma joia AM Pratas.",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/ampratas/ampratas(1).jpeg', 'temp'),
            'background' => new UploadedFile('photos/ampratas/ampratas(2).jpeg', 'temp'),
            'title' => "Joias Exclusivas",
            'sub_title' => "Prata legítima",
            'text' => "Conheça nossa coleção de joias em prata 925, feitas para brilhar.",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/ampratas/ampratas(3).jpeg', 'temp'),
            'background' => new UploadedFile('photos/ampratas/ampratas(4).jpeg', 'temp'),
            'title' => "Design Moderno",
            'sub_title' => "Sofisticação",
            'text' => "Peças exclusivas para quem valoriza elegância e autenticidade.",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/ampratas/ampratas(2).jpeg', 'temp'),
            'background' => new UploadedFile('photos/ampratas/ampratas(3).jpeg', 'temp'),
            'title' => "Presente Perfeito",
            'sub_title' => "Para todas as ocasiões",
            'text' => "Surpreenda quem você ama com uma joia AM Pratas.",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/ampratas/ampratas(2).jpeg', 'temp'),
            'background' => new UploadedFile('photos/ampratas/ampratas(3).jpeg', 'temp'),
            'title' => "Presente Perfeito",
            'sub_title' => "Para todas as ocasiões",
            'text' => "Surpreenda quem você ama com uma joia AM Pratas.",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
        $this->collectionsImages->create([
            'photo' => new UploadedFile('photos/ampratas/ampratas(2).jpeg', 'temp'),
            'background' => new UploadedFile('photos/ampratas/ampratas(3).jpeg', 'temp'),
            'title' => "Presente Perfeito",
            'sub_title' => "Para todas as ocasiões",
            'text' => "Surpreenda quem você ama com uma joia AM Pratas.",
            'client_id' => AbstractView::AM_PRATAS,
        ]);
    }

}
