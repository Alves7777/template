<?php

namespace App\Services\SectionThree;

use App\Repositories\SectionThree\SectionThreeRepository;
use App\Traits\UploadFile;

class SectionThreeService extends SectionThreeRepository
{
    use UploadFile;
    private SectionThreeRepository $sectionThreeRepository;

    public function __construct(SectionThreeRepository $sectionThreeRepository)
    {
        $this->sectionThreeRepository = $sectionThreeRepository;
    }

    public function all()
    {
        return $this->sectionThreeRepository->all();
    }

    public function create(array $property)
    {
        if (!empty($property['photo'])) {
            $property['photo'] = $this->uploadPhoto($property['photo']);
        }

        return $this->sectionThreeRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->sectionThreeRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        if (!empty($property['photo'])) {
            $property['photo'] = $this->uploadPhoto($property['photo']);
        }
        return $this->sectionThreeRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->sectionThreeRepository->delete($id);
    }

    public function firstOrFail()
    {
        return $this->sectionThreeRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->sectionThreeRepository->pluck($column, $key);
    }

}
