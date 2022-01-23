<?php

namespace App\Services\SectionSeven;

use App\Repositories\SectionSeven\SectionSevenRepository;

class SectionSevenService extends SectionSevenRepository
{
    private SectionSevenRepository $sectionSevenRepository;

    public function __construct(SectionSevenRepository $sectionSevenRepository)
    {
        $this->sectionSevenRepository = $sectionSevenRepository;
    }

    public function all()
    {
        return $this->sectionSevenRepository->all();
    }

    public function create(array $property)
    {
        return $this->sectionSevenRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->sectionSevenRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        return $this->sectionSevenRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->sectionSevenRepository->delete($id);
    }

    public function firstOrFail()
    {
        return $this->sectionSevenRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->sectionSevenRepository->pluck($column, $key);
    }

}
