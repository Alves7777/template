<?php

namespace App\Repositories\SectionFour;

use App\Models\SectionFour\SectionFour;
use App\Traits\HasClientId;

class SectionFourRepository
{
    private SectionFour $entity;
    use HasClientId;

    public function __construct(SectionFour $entity)
    {
        $this->entity = $entity;
    }

    public function all($clientId = null)
    {
        return $this->entity
            ->newQuery()
            ->where('client_id', $this->getClientId($clientId))
            ->orderBy('sub_title', 'DESC')
            ->get();
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
        $sectionFour = $this->findOrFail($id, $clientId);
        if (!empty($property)) {
            $sectionFour->update($property);
        }
        return $sectionFour;
    }

    public function delete(string $id, $clientId = null)
    {
        $sectionFour = $this->findOrFail($id, $clientId);
        return $sectionFour->delete();
    }

    public function firstOrFail($clientId = null)
    {
        $clientId = $this->getClientId($clientId);
        return $this->entity->newQuery()->where('client_id', $clientId)->firstOrFail();
    }

    public function pluck(string $column, string $key, $clientId = null)
    {
        $clientId = $this->getClientId($clientId);
        return $this->entity->newQuery()->where('client_id', $clientId)->pluck($column, $key);
    }
}
