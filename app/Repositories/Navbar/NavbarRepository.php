<?php

namespace App\Repositories\Navbar;

use App\Models\NavBar\Navbar;

class NavbarRepository
{
    private Navbar $entity;

    public function __construct(Navbar $entity)
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
        $navbar = $this->findOrFail($id);
        if (!empty($property)) {
            $navbar->update($property);
        }
        return $navbar;
    }

    public function delete(string $id)
    {
        $navbar = $this->findOrFail($id);
        return $navbar->delete();
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
