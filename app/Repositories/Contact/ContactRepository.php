<?php

namespace App\Repositories\Contact;

use App\Models\Contact\Contact;
use App\Traits\HasClientId;

class ContactRepository
{
    private Contact$entity;
    use HasClientId;

    public function __construct(Contact $entity)
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
        $data = $this->findOrFail($id, $clientId);
        if (!empty($property)) {
            $data->update($property);
        }
        return $data;
    }

    public function delete(string $id, $clientId = null)
    {
        $data = $this->findOrFail($id, $clientId);
        return $data->delete();
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
