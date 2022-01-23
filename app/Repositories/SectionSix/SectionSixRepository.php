<?php

namespace App\Repositories\SectionSix;

use App\Models\SectionSix\SectionSix;
use App\Traits\UploadFile;

class SectionSixRepository
{
    private SectionSix $entity;
    use UploadFile;

    public function __construct(SectionSix $entity)
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
        $sectionsixi = $this->findOrFail($id);
        if (!empty($property)) {
            self::removePhoto($sectionsixi->image);

            $sectionsixi->update($property);
        }
        return $sectionsixi;
    }

    public function delete(string $id)
    {
        $sectionsixi = $this->findOrFail($id);
        self::removePhoto($sectionsixi->image);

        return $sectionsixi->delete();
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
