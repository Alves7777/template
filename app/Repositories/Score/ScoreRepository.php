<?php

namespace App\Repositories\Score;

use App\Models\Score\Score;

class ScoreRepository
{
    private Score $entity;

    public function __construct(Score $entity)
    {
        $this->entity = $entity;
    }

    public function all()
    {
        return $this->entity
            ->newQuery()
            ->orderBy('number', 'DESC')
            ->get();
    }

    public function getSlug($clientId)
    {
        return $this->entity
            ->newQuery()
            ->where('client_id', $clientId)
            ->orderBy('number', 'DESC')
            ->get();
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
        $progress = $this->findOrFail($id);
        if (!empty($property)) {
            $progress->update($property);
        }
        return $progress;
    }

    public function delete(string $id)
    {
        $progress = $this->findOrFail($id);
        return $progress->delete();
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
