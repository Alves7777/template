<?php

namespace App\Services\Score;

use App\Repositories\Score\ScoreRepository;

class ScoreService extends ScoreRepository
{
    private ScoreRepository $scoreRepository;

    public function __construct(ScoreRepository $scoreRepository)
    {
        $this->scoreRepository = $scoreRepository;
    }

    public function all()
    {
        return $this->scoreRepository->all();
    }

    public function create(array $property)
    {
        return $this->scoreRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->scoreRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        return $this->scoreRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->scoreRepository->delete($id);
    }

    public function firstOrFail()
    {
        return $this->scoreRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->scoreRepository->pluck($column, $key);
    }
}
