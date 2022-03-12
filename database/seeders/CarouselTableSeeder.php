<?php

namespace Database\Seeders;

use App\AbstractView\AbstractView;
use App\Models\Carousel\Carousel;
use App\Models\SectionFour\SectionFour;
use App\Services\CollectionsImages\CollectionsImagesService;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class CarouselTableSeeder extends Seeder
{

    const QUANTITY = 9;

    private CollectionsImagesService $collectionsImagesService;

    public function __construct(CollectionsImagesService $collectionsImagesService)
    {
        $this->collectionsImagesService = $collectionsImagesService;
    }

    public function run()
    {
        $this->collectionsImagesService->create([
            'photo' => new UploadedFile(public_path() . '/storage/photos/alpi.jpg', 'temp'),
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",
            'title' => "Ut possimus",
        ]);
        $this->collectionsImagesService->create([
            'photo' => new UploadedFile(public_path() . '/storage/photos/alpi.jpg', 'temp'),
            'background' => new UploadedFile(public_path() . '/storage/photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita"]);
        $this->collectionsImagesService->create([
            'photo' => new UploadedFile(public_path() . '/storage/photos/alpi2.jpg', 'temp'),
            'background' => new UploadedFile(public_path() . '/storage/photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",]);
        $this->collectionsImagesService->create([
            'photo' => new UploadedFile(public_path() . '/storage/photos/alpi3.jpg', 'temp'),
            'background' => new UploadedFile(public_path() . '/storage/photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",]);
        $this->collectionsImagesService->create([
            'photo' => new UploadedFile(public_path() . '/storage/photos/alpibayern.jpg', 'temp'),
            'background' => new UploadedFile(public_path() . '/storage/photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",]);
        $this->collectionsImagesService->create([
            'photo' => new UploadedFile(public_path() . '/storage/photos/basebol.jpg', 'temp'),
            'background' => new UploadedFile(public_path() . '/storage/photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",]);
        $this->collectionsImagesService->create([
            'photo' => new UploadedFile(public_path() . '/storage/photos/basquete.jpeg', 'temp'),
            'background' => new UploadedFile(public_path() . '/storage/photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",]);
        $this->collectionsImagesService->create([
            'photo' => new UploadedFile(public_path() . '/storage/photos/europa.jpg', 'temp'),
            'background' => new UploadedFile(public_path() . '/storage/photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita",]);
        $this->collectionsImagesService->create([
            'photo' => new UploadedFile(public_path() . '/storage/photos/gabrielalpi.jpg', 'temp'),
            'background' => new UploadedFile(public_path() . '/storage/photos/bayerngol.jpeg', 'temp'),
            'title' => "teste",
            'sub_title' => "teste_sub",
            'text' => "Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita"]);

    }

}
