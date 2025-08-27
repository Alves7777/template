<?php

namespace App\Services\CollectionsImages;

use App\Repositories\CollectionsImages\CollectionsImagesRepository;

class CollectionsImagesService
{
    private CollectionsImagesRepository $collectionsImagesRepository;

    public function __construct(CollectionsImagesRepository $collectionsImagesRepository)
    {
        $this->collectionsImagesRepository = $collectionsImagesRepository;
    }

    public function all($clientId = null)
    {
        return $this->collectionsImagesRepository->all($clientId);
    }

    public function create(array $property, $clientId = null)
    {
        return $this->collectionsImagesRepository->create($property, $clientId);
    }

    public function findOrFail($id, $clientId = null)
    {
        return $this->collectionsImagesRepository->findOrFail($id, $clientId);
    }

    public function update($id, array $property, $clientId = null)
    {
        return $this->collectionsImagesRepository->update($id, $property, $clientId);
    }

    public function delete(string $id, $clientId = null)
    {
        return $this->collectionsImagesRepository->delete($id, $clientId);
    }

    public function firstOrFail($clientId = null)
    {
        return $this->collectionsImagesRepository->firstOrFail($clientId);
    }

    public function pluck(string $column, string $key, $clientId = null)
    {
        return $this->collectionsImagesRepository->pluck($column, $key, $clientId);
    }
}
