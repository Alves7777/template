<?php

namespace App\Repositories\Pages;

use App\Models\Pages\Pages;

class PagesRepository
{
    private Pages $entity;

    public function __construct(Pages $entity)
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
        $pages = $this->findOrFail($id);
        if (!empty($property)) {
            $pages->update($property);
        }
        return $pages;
    }

    public function delete(string $id)
    {
        $pages = $this->findOrFail($id);
        return $pages->delete();
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
