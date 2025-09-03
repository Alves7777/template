<?php

namespace App\Repositories\Title;

use App\Models\Title\Title;
use App\Traits\HasClientId;

class TitleRepository
{
    private Title $entity;
    use HasClientId;

    public function __construct(Title $entity)
    {
        $this->entity = $entity;
    }

    public function all($clientId = null)
    {
        return $this->entity->newQuery()->where('client_id', $this->getClientId($clientId))->get();
    }

    public function create(array $property, $clientId = null)
    {
        $property['client_id'] = $this->getClientId($clientId);
        return $this->entity->newQuery()->create($property);    }

    public function findOrFail($id, $clientId = null)
    {
        $clientId = $this->getClientId($clientId);
        return $this->entity->newQuery()->where('client_id', $clientId)->findOrFail($id);    }

    public function update($id, array $property, $clientId = null)
    {
        $title = $this->findOrFail($id, $clientId);
        if (!empty($property)) {
            $title->update($property);
        }
        return $title;
    }

    public function delete(string $id, $clientId = null)
    {
        $title = $this->findOrFail($id, $clientId);
        return $title->delete();
    }
}
