<?php

namespace App\Repositories\SectionThree;

use App\Models\SectionThree\SectionThree;
use App\Traits\UploadFile;

class SectionThreeRepository
{
    private SectionThree $entity;
    use UploadFile;

    public function __construct(SectionThree $entity)
    {
        $this->entity = $entity;
    }

    public function all()
    {
        return $this->entity->newQuery()->get();
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
        $sectionThree = $this->findOrFail($id);
        if (!empty($property)) {
            self::removePhoto($sectionThree->photo);
            $sectionThree->update($property);
        }
        return $sectionThree;
    }

    public function delete(string $id)
    {
        $sectionThree = $this->findOrFail($id);
        self::removePhoto($sectionThree->photo);
        return $sectionThree->delete();
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
