<?php

namespace App\Repositories\CollectionsImages;

use App\Traits\UploadFile;
use App\Models\Carousel\Carousel;

class CollectionsImagesRepository
{
    private Carousel $entity;
    use UploadFile;

    public function __construct(Carousel$entity)
    {
        $this->entity = $entity;
    }

    public function all()
    {
        return $this->entity->newQuery()
            ->orderBy('created_at')
            ->get();
    }

    public function create(array $property)
    {
        return $this->entity->newQuery()->create($property);
    }

    public function findOrFail($id)
    {
        return $this->entity->newQuery()->findOrFail($id);
    }

    public function update($id, array $property)
    {
        $collectionsImages = $this->findOrFail($id);
        if (!empty($property)) {
            self::removePhoto($collectionsImages->photo);

            $collectionsImages->update($property);
        }
        return $collectionsImages;
    }

    public function delete(string $id)
    {
        $collectionsImages = $this->findOrFail($id);
        self::removePhoto($collectionsImages->photo);

        return $collectionsImages->delete();
    }

    public function firstOrFail()
    {
        return $this->entity->newQuery()->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->entity->newQuery()->pluck($column, $key);
    }

}
