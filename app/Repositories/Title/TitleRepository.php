<?php

namespace App\Repositories\Title;

use App\Models\Title\Title;

class TitleRepository
{
    private Title $entity;

    public function __construct(Title $entity)
    {
        $this->entity = $entity;
    }

    public function all()
    {
        return $this->entity
            ->newQuery()
            ->orderBy('title', 'ASC')
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
