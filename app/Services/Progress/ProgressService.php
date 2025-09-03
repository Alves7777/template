<?php

namespace App\Services\Progress;

use App\Repositories\Progress\ProgressRepository;
use App\Traits\UploadFile;

class ProgressService extends ProgressRepository
{
    use UploadFile;
    private ProgressRepository $progressRepository;

    public function __construct(ProgressRepository $progressRepository)
    {
        $this->progressRepository = $progressRepository;
    }

    public function all($clientId = null)
    {
        return $this->progressRepository->all($clientId);
    }

    public function create(array $property): \App\Models\Progress\Progress
    {
        if (!empty($property['photo'])) {
            $property['photo'] = $this->uploadPhoto($property['photo']);
        }

        return $this->progressRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->progressRepository->findOrFail($id);
    }

    public function update($id, array $property): \App\Models\Progress\Progress
    {
        if (!empty($property['photo'])) {
            $property['photo'] = $this->uploadPhoto($property['photo']);
        }
        return $this->progressRepository->update($id, $property);
    }

    public function delete($id)
    {
        return $this->progressRepository->delete($id);
    }

    public function firstOrFail(): \App\Models\Progress\Progress
    {
        return $this->progressRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->progressRepository->pluck($column, $key);
    }

}
