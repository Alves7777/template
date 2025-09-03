<?php

namespace App\Services\SectionSeven;

use App\Repositories\SectionSeven\SectionSevenRepository;

class SectionSevenService
{
    private SectionSevenRepository $sectionSevenRepository;

    public function __construct(SectionSevenRepository $sectionSevenRepository)
    {
        $this->sectionSevenRepository = $sectionSevenRepository;
    }

    public function all($clientId = null)
    {
        return $this->sectionSevenRepository->all($clientId);
    }

    public function create(array $property, $clientId = null)
    {
        return $this->sectionSevenRepository->create($property, $clientId);
    }

    public function findOrFail($id, $clientId = null)
    {
        return $this->sectionSevenRepository->findOrFail($id, $clientId);
    }

    public function update($id, array $property, $clientId = null)
    {
        return $this->sectionSevenRepository->update($id, $property, $clientId);
    }

    public function delete(string $id, $clientId = null)
    {
        return $this->sectionSevenRepository->delete($id, $clientId);
    }

    public function firstOrFail($clientId = null)
    {
        return $this->sectionSevenRepository->firstOrFail($clientId);
    }

    public function pluck(string $column, string $key, $clientId = null)
    {
        return $this->sectionSevenRepository->pluck($column, $key, $clientId);
    }

}
