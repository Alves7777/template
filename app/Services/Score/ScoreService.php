<?php

namespace App\Services\Score;

use App\Repositories\Score\ScoreRepository;

class ScoreService
{
    private ScoreRepository $scoreRepository;

    public function __construct(ScoreRepository $scoreRepository)
    {
        $this->scoreRepository = $scoreRepository;
    }

    public function all($clientId = null)
    {
        return $this->scoreRepository->all($clientId);
    }

    public function create(array $property, $clientId = null)
    {
        return $this->scoreRepository->create($property, $clientId);
    }

    public function findOrFail($id, $clientId = null)
    {
        return $this->scoreRepository->findOrFail($id, $clientId);
    }

    public function update($id, array $property, $clientId = null)
    {
        return $this->scoreRepository->update($id, $property, $clientId);
    }

    public function delete(string $id, $clientId = null)
    {
        return $this->scoreRepository->delete($id, $clientId);
    }

    public function firstOrFail($clientId = null)
    {
        return $this->scoreRepository->firstOrFail($clientId);
    }

    public function pluck(string $column, string $key, $clientId = null)
    {
        return $this->scoreRepository->pluck($column, $key, $clientId);
    }
}
