<?php

namespace App\Services\SectionFour;

use App\Repositories\SectionFour\SectionFourRepository;

class SectionFourService extends SectionFourRepository
{
    private SectionFourRepository $sectionFourRepository;

    public function __construct(SectionFourRepository $sectionFourRepository)
    {
        $this->sectionFourRepository = $sectionFourRepository;
    }

    public function getSlug($clientId)
    {
        return $this->sectionFourRepository->getSlug($clientId);
    }

    public function all()
    {
        return $this->sectionFourRepository->all();
    }

    public function create(array $property)
    {
        return $this->sectionFourRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->sectionFourRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        return $this->sectionFourRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->sectionFourRepository->delete($id);
    }

    public function firstOrFail()
    {
        return $this->sectionFourRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->sectionFourRepository->pluck($column, $key);
    }

}
