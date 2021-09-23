<?php

namespace App\Repositories\SectionOne;

use App\Models\SectionOne\SectionOne;

class SectionOneRepository
{
    private SectionOne $entity;

    public function __construct(SectionOne $entity)
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
        $sectionOne = $this->findOrFail($id);
        if (!empty($property)) {
            $sectionOne->update($property);
        }
        return $sectionOne;
    }

    public function delete(string $id)
    {
        $sectionOne = $this->findOrFail($id);
        return $sectionOne->delete();
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
