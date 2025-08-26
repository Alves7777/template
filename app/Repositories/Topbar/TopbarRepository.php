<?php

namespace App\Repositories\Topbar;


namespace App\Repositories\Topbar;

use App\Models\Topbar\Topbar;
use App\Traits\HasClientId;

class TopbarRepository
{
    private Topbar $entity;
    use HasClientId;

    public function __construct(Topbar $entity)
    {
        $this->entity = $entity;
    }

    public function all($clientId = null)
    {
        return $this->entity->newQuery()->where('client_id', $this->getClientId($clientId))->get();
    }

    public function create(array $property, $clientId = null)
    {
        $clientId = $this->getClientId($clientId);
        $property['client_id'] = $clientId;
        return $this->entity->newQuery()->create($property);
    }

    public function findOrFail($id, $clientId = null)
    {
        $clientId = $this->getClientId($clientId);
        return $this->entity->newQuery()->where('client_id', $clientId)->findOrFail($id);
    }

    public function update($id, array $property, $clientId = null)
    {
        $topbar = $this->findOrFail($id, $clientId);
        if (!empty($property)) {
            $topbar->update($property);
        }
        return $topbar;
    }

    public function delete(string $id, $clientId = null)
    {
        $topbar = $this->findOrFail($id, $clientId);
        return $topbar->delete();
    }

//    public function firstOrFail($clientId = null)
//    {
//        $clientId = $this->getClientId($clientId);
//        return $this->entity->newQuery()->where('client_id', $clientId)->firstOrFail();
//    }
//
//    public function pluck(string $column, string $key, $clientId = null)
//    {
//        $clientId = $this->getClientId($clientId);
//        return $this->entity->newQuery()->where('client_id', $clientId)->pluck($column, $key);
//    }
}
