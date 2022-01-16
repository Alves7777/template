<?php

namespace App\Services\SectionFive;

use App\Repositories\SectionFive\SectionFiveRepository;
use App\Traits\UploadFile;

class SectionFiveService extends SectionFiveRepository
{
    private SectionFiveRepository $sectionFiveRepository;
    use UploadFile;

    public function __construct(SectionFiveRepository $sectionFiveRepository)
    {
        $this->sectionFiveRepository = $sectionFiveRepository;
    }

    public function all()
    {
        return $this->sectionFiveRepository->all();
    }

    public function create(array $property)
    {
        $property['image'] = !empty($property['image']) ? $this->uploadPhoto($property['image']) : '';
        $property['background'] = !empty($property['background']) ? $this->uploadPhoto($property['background']) : '';

        return $this->sectionFiveRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->sectionFiveRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        $property['image'] = !empty($property['image']) ? $this->uploadPhoto($property['image']) : '';
        $property['background'] = !empty($property['background']) ? $this->uploadPhoto($property['background']) : '';

        return $this->sectionFiveRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->sectionFiveRepository->delete($id);
    }

    public function firstOrFail()
    {
        return $this->sectionFiveRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->sectionFiveRepository->pluck($column, $key);
    }

}
