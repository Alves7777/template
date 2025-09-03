<?php

namespace App\Services\SectionSix;

use App\Repositories\SectionSix\SectionSixRepository;
use App\Traits\UploadFile;

class SectionSixService
{
    private SectionSixRepository $sectionSixRepository;
    use UploadFile;

    public function __construct(SectionSixRepository $sectionSixRepository)
    {
        $this->sectionSixRepository = $sectionSixRepository;
    }

    public function all($clientId = null)
    {
        return $this->sectionSixRepository->all($clientId);
    }

    public function create(array $property, $clientId = null)
    {
        $property['image'] = !empty($property['image']) ? $this->uploadPhoto($property['image']) : '';

        return $this->sectionSixRepository->create($property, $clientId);
    }

    public function findOrFail($id, $clientId = null)
    {
        return $this->sectionSixRepository->findOrFail($id, $clientId);
    }

    public function update($id, array $property, $clientId = null)
    {
        $property['image'] = !empty($property['image']) ? $this->uploadPhoto($property['image']) : '';

        return $this->sectionSixRepository->update($id, $property, $clientId);
    }

    public function delete(string $id, $clientId = null)
    {
        return $this->sectionSixRepository->delete($id, $clientId);
    }

    public function firstOrFail($clientId = null)
    {
        return $this->sectionSixRepository->firstOrFail($clientId);
    }

    public function pluck(string $column, string $key, $clientId = null)
    {
        return $this->sectionSixRepository->pluck($column, $key, $clientId);
    }

}
