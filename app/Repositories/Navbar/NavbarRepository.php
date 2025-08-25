<?php

namespace App\Repositories\Navbar;

use App\Models\NavBar\Navbar;
use App\Traits\UploadFile;

class NavbarRepository
{
    private Navbar $entity;
    use UploadFile;

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

    public function findOrFail($id, $user)
    {
        return $this->entity->newQuery()
            ->where('id', $id)
            ->where('client_id', $user)
            ->firstOrFail();
    }

    public function update($id, $user, array $property)
    {
        $navbar = $this->findOrFail($id, $user);
        if (!empty($property)) {
            self::removePhoto($navbar->logo);
            $navbar->update($property);
        }
        return $navbar;
    }

    public function delete(string $id, $user)
    {
        $navbar = $this->findOrFail($id, $user);
        self::removePhoto($navbar->logo);
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
