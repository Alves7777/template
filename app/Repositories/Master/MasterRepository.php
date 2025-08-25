<?php

namespace App\Repositories\Master;

use App\Models\Master\Master;

class MasterRepository
{
    private Master $entity;

    public function __construct(Master $entity)
    {
        $this->entity = $entity;
    }

    public function all()
    {
        return $this->entity->newQuery()->get();
    }

    public function paginate()
    {
        return $this->entity->newQuery()->paginate();
    }

    public function findOrFail($id)
    {
        return $this->entity->newQuery()->findOrFail($id);
    }
}
