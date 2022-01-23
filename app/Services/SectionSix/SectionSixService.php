<?php

namespace App\Services\SectionSix;

use App\Repositories\SectionSix\SectionSixRepository;
use App\Traits\UploadFile;

class SectionSixService extends SectionSixRepository
{
    private SectionSixRepository $sectionSixRepository;
    use UploadFile;

    public function __construct(SectionSixRepository $sectionSixRepository)
    {
        $this->sectionSixRepository = $sectionSixRepository;
    }

    public function all()
    {
        return $this->sectionSixRepository->all();
    }

    public function create(array $property)
    {
        $property['image'] = !empty($property['image']) ? $this->uploadPhoto($property['image']) : '';

        return $this->sectionSixRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->sectionSixRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        $property['image'] = !empty($property['image']) ? $this->uploadPhoto($property['image']) : '';

        return $this->sectionSixRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->sectionSixRepository->delete($id);
    }

    public function firstOrFail()
    {
        return $this->sectionSixRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->sectionSixRepository->pluck($column, $key);
    }

}
