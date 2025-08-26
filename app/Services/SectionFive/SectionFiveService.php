<?php

namespace App\Services\SectionFive;

use App\Repositories\SectionFive\SectionFiveRepository;
use App\Traits\UploadFile;

class SectionFiveService
{
    private SectionFiveRepository $sectionFiveRepository;
    use UploadFile;

    public function __construct(SectionFiveRepository $sectionFiveRepository)
    {
        $this->sectionFiveRepository = $sectionFiveRepository;
    }

    public function all($clientId = null)
    {
        return $this->sectionFiveRepository->all($clientId);
    }

    public function create(array $property, $clientId = null)
    {
        $property['image'] = !empty($property['image']) ? $this->uploadPhoto($property['image']) : '';
        $property['background'] = !empty($property['background']) ? $this->uploadPhoto($property['background']) : '';

        return $this->sectionFiveRepository->create($property, $clientId);
    }

    public function findOrFail($id, $clientId = null)
    {
        return $this->sectionFiveRepository->findOrFail($id, $clientId);
    }

    public function update($id, array $property, $clientId = null)
    {
        $property['image'] = !empty($property['image']) ? $this->uploadPhoto($property['image']) : '';
        $property['background'] = !empty($property['background']) ? $this->uploadPhoto($property['background']) : '';

        return $this->sectionFiveRepository->update($id, $property, $clientId);
    }

    public function delete(string $id, $clientId = null)
    {
        return $this->sectionFiveRepository->delete($id, $clientId);
    }

    public function firstOrFail($clientId = null)
    {
        return $this->sectionFiveRepository->firstOrFail($clientId);
    }

    public function pluck(string $column, string $key, $clientId = null)
    {
        return $this->sectionFiveRepository->pluck($column, $key, $clientId);
    }

}
