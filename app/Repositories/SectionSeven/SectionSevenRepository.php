<?php

namespace App\Repositories\SectionSeven;

use App\Models\SectionSeven\SectionSeven;
use App\Traits\UploadFile;

class SectionSevenRepository
{
    private SectionSeven $entity;

    public function __construct(SectionSeven $entity)
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
        $sectionseven = $this->findOrFail($id);
        if (!empty($property)) {
            $sectionseven->update($property);
        }
        return $sectionseven;
    }

    public function delete(string $id)
    {
        $sectionseven = $this->findOrFail($id);

        return $sectionseven->delete();
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
