<?php

namespace App\Repositories\Topbar;

use App\Models\Topbar\Topbar;

class TopbarRepository
{
    private Topbar $entity;

    public function __construct(Topbar $entity)
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
        $topbar = $this->findOrFail($id);
        if (!empty($property)) {
            $topbar->update($property);
        }
        return $topbar;
    }

    public function delete(string $id)
    {
        $topbar = $this->findOrFail($id);
        return $topbar->delete();
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
