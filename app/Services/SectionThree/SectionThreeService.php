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

    public function all($clientId = null)
    {
        return $this->sectionThreeRepository->all($clientId);
    }

    public function create(array $property): \App\Models\SectionThree\SectionThree
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

    public function update($id, array $property): \App\Models\SectionThree\SectionThree
    {
        if (!empty($property['photo'])) {
            $property['photo'] = $this->uploadPhoto($property['photo']);
        }
        return $this->sectionThreeRepository->update($id, $property);
    }

    public function delete($id)
    {
        return $this->sectionThreeRepository->delete($id);
    }

    public function firstOrFail(): \App\Models\SectionThree\SectionThree
    {
        return $this->sectionThreeRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->sectionThreeRepository->pluck($column, $key);
    }

}
