<?php

namespace App\Services\CollectionsImages;

use App\Repositories\CollectionsImages\CollectionsImagesRepository;
use App\Traits\UploadFile;

class CollectionsImagesService
{

    private CollectionsImagesRepository $collectionsImagesRepository;
    use UploadFile;

    public function __construct(CollectionsImagesRepository $collectionsImagesRepository)
    {
        $this->collectionsImagesRepository = $collectionsImagesRepository;
    }

    public function all()
    {
        return $this->collectionsImagesRepository->all();
    }

    public function create(array $property)
    {
        $property['photo'] = !empty($property['photo']) ? $this->uploadPhoto($property['photo']) : '';

        return $this->collectionsImagesRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->collectionsImagesRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        $property['photo'] = !empty($property['photo']) ? $this->uploadPhoto($property['photo']) : '';

        return $this->collectionsImagesRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->collectionsImagesRepository->delete($id);
    }

    public function firstOrFail()
    {
        return $this->collectionsImagesRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->collectionsImagesRepository->pluck($column, $key);
    }

}
