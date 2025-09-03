<?php

namespace App\Repositories\Score;

use App\Models\Score\Score;
use App\Traits\HasClientId;

class ScoreRepository
{
    private Score $entity;
    use HasClientId;

    public function __construct(Score $entity)
    {
        $this->entity = $entity;
    }

    public function all($clientId = null)
    {
        return $this->queryByClient($clientId)->orderBy('number', 'DESC')->get();
    }

    public function create(array $property, $clientId = null)
    {
        $clientId = $this->getClientId($clientId);
        $property['client_id'] = $clientId;
        return $this->entity->newQuery()->create($property);
    }

    public function findOrFail($id, $clientId = null)
    {
        return $this->queryByClient($clientId)->findOrFail($id);
    }

    public function update($id, array $property, $clientId = null)
    {
        $progress = $this->findOrFail($id, $clientId);
        if (!empty($property)) {
            $progress->update($property);
        }
        return $progress;
    }

    public function delete(string $id, $clientId = null)
    {
        $progress = $this->findOrFail($id, $clientId);
        return $progress->delete();
    }

    public function firstOrFail($clientId = null)
    {
        return $this->queryByClient($clientId)->firstOrFail();
    }

    public function pluck(string $column, string $key, $clientId = null)
    {
        return $this->queryByClient($clientId)->pluck($column, $key);
    }

    private function queryByClient($clientId = null)
    {
        $clientId = $this->getClientId($clientId);
        return $this->entity->newQuery()->where('client_id', $clientId);
    }
}
