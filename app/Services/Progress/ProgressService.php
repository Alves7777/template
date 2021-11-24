<?php

namespace App\Services\Progress;

use App\Repositories\Progress\ProgressRepository;
use Exception;

class ProgressService extends ProgressRepository
{
    private ProgressRepository $progressRepository;

    public function __construct(ProgressRepository $progressRepository)
    {
        $this->progressRepository = $progressRepository;
    }

    public function all()
    {
        return $this->progressRepository->all();
    }

    public function create(array $property)
    {
        return $this->progressRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->progressRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        return $this->progressRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->progressRepository->delete($id);
    }

    public function firstOrFail()
    {
        return $this->progressRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->progressRepository->pluck($column, $key);
    }
}
