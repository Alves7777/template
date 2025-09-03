<?php

namespace App\Services\SectionFour;

use App\Repositories\SectionFour\SectionFourRepository;

class SectionFourService
{
    private SectionFourRepository $sectionFourRepository;

    public function __construct(SectionFourRepository $sectionFourRepository)
    {
        $this->sectionFourRepository = $sectionFourRepository;
    }

    public function all($clientId = null)
    {
        return $this->sectionFourRepository->all($clientId);
    }

    public function create(array $property, $clientId = null)
    {
        return $this->sectionFourRepository->create($property, $clientId);
    }

    public function findOrFail($id, $clientId = null)
    {
        return $this->sectionFourRepository->findOrFail($id, $clientId);
    }

    public function update($id, array $property, $clientId = null)
    {
        return $this->sectionFourRepository->update($id, $property, $clientId);
    }

    public function delete(string $id, $clientId = null)
    {
        return $this->sectionFourRepository->delete($id, $clientId);
    }

    public function firstOrFail($clientId = null)
    {
        return $this->sectionFourRepository->firstOrFail($clientId);
    }

    public function pluck(string $column, string $key, $clientId = null)
    {
        return $this->sectionFourRepository->pluck($column, $key, $clientId);
    }
}
