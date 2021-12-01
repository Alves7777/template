<?php

namespace App\Repositories\SectionFour;

use App\Models\SectionFour\SectionFour;

class SectionFourRepository
{
    private SectionFour $entity;

    public function __construct(SectionFour $entity)
    {
        $this->entity = $entity;
    }

    public function all()
    {
        return $this->entity
            ->newQuery()
            ->orderBy('sub_title', 'DESC')
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
        $sectionFour = $this->findOrFail($id);
        if (!empty($property)) {
            $sectionFour->update($property);
        }
        return $sectionFour;
    }

    public function delete(string $id)
    {
        $sectionFour = $this->findOrFail($id);
        return $sectionFour->delete();
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
