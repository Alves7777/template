<?php

namespace App\Repositories\CollectionsImages;

use App\Traits\UploadFile;
use App\Models\Carousel\Carousel;
use App\Traits\HasClientId;

class CollectionsImagesRepository
{
    private Carousel $entity;
    use UploadFile;
    use HasClientId;

    public function __construct(Carousel$entity)
    {
        $this->entity = $entity;
    }

    public function all($clientId = null)
    {
        return $this->queryByClient($clientId)->orderBy('created_at')->get();
    }

    public function create(array $property, $clientId = null)
    {
        $clientId = $this->getClientId($clientId);
        $property['client_id'] = $clientId;
        return $this->entity->newQuery()->create($property);
    }

    public function findOrFail($id, $clientId = null)
    {
        return $this->queryByClient($clientId)->findOrFail($id);
    }

    public function update($id, array $property, $clientId = null)
    {
        $collectionsImages = $this->findOrFail($id, $clientId);
        if (!empty($property)) {
            self::removePhoto($collectionsImages->photo);
            $collectionsImages->update($property);
        }
        return $collectionsImages;
    }

    public function delete(string $id, $clientId = null)
    {
        $collectionsImages = $this->findOrFail($id, $clientId);
        self::removePhoto($collectionsImages->photo);
        return $collectionsImages->delete();
    }

    public function firstOrFail($clientId = null)
    {
        return $this->queryByClient($clientId)->firstOrFail();
    }

    public function pluck(string $column, string $key, $clientId = null)
    {
        return $this->queryByClient($clientId)->pluck($column, $key);
    }

    private function queryByClient($clientId = null)
    {
        $clientId = $this->getClientId($clientId);
        return $this->entity->newQuery()->where('client_id', $clientId);
    }

}
