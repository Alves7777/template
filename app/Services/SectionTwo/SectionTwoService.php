<?php

namespace App\Services\SectionTwo;

use App\Repositories\SectionTwo\SectionTwoRepository;
use Illuminate\Support\Collection;

class SectionTwoService
{
    private SectionTwoRepository $sectionTwoRepository;

    public function __construct(SectionTwoRepository $sectionTwoRepository)
    {
        $this->sectionTwoRepository = $sectionTwoRepository;
    }

    public function getSlug($clientId)
    {
        return $this->sectionTwoRepository->getSlug($clientId);
    }

    public function all(): Collection
    {
        return $this->sectionTwoRepository->all();
    }

    public function create(array $property)
    {
        return $this->sectionTwoRepository->create($property);
    }

    public function update(string $id, array $property)
    {
        return $this->sectionTwoRepository->update($id, $property);
    }

    public function findOrFail(string $id)
    {
        return $this->sectionTwoRepository->findOrFail($id);
    }

    public function delete(string $id)
    {
        return $this->sectionTwoRepository->delete($id);
    }
}
