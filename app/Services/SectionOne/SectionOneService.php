<?php

namespace App\Services\SectionOne;

use App\Repositories\SectionOne\SectionOneRepository;
use App\Traits\UploadFile;

class SectionOneService
{
    private SectionOneRepository $sectionOneRepository;

    public function __construct(SectionOneRepository $sectionOneRepository)
    {
        $this->sectionOneRepository = $sectionOneRepository;
    }

    public function all()
    {
        return $this->sectionOneRepository->all();
    }

    public function create(array $property)
    {
        return $this->sectionOneRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->sectionOneRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        return $this->sectionOneRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->sectionOneRepository->delete($id);
    }

    public function get()
    {
    }

    public function firstOrFail()
    {
        return $this->sectionOneRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->sectionOneRepository->pluck($column, $key);
    }

}
