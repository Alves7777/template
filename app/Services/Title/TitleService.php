<?php

namespace App\Services\Title;

use App\Repositories\Title\TitleRepository;

class TitleService
{
    private TitleRepository $titleRepository;

    public function __construct(TitleRepository $titleRepository)
    {
        $this->titleRepository = $titleRepository;
    }

    public function all($clientId = null)
    {
        return $this->titleRepository->all($clientId);
    }

    public function create(array $property, $clientId = null)
    {
        return $this->titleRepository->create($property, $clientId);
    }

    public function findOrFail($id, $clientId = null)
    {
        return $this->titleRepository->findOrFail($id, $clientId);
    }

    public function update($id, array $property, $clientId = null)
    {
        return $this->titleRepository->update($id, $property, $clientId);
    }

    public function delete(string $id, $clientId = null)
    {
        return $this->titleRepository->delete($id, $clientId);
    }

    public function firstOrFail()
    {
        return $this->titleRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->titleRepository->pluck($column, $key);
    }

}
