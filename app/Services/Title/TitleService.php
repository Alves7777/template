<?php

namespace App\Services\Title;

use App\Repositories\Title\TitleRepository;

class TitleService extends TitleRepository
{
    private TitleRepository $titleRepository;

    public function __construct(TitleRepository $titleRepository)
    {
        $this->titleRepository = $titleRepository;
    }

    public function getSlug($clientId)
    {
        return $this->titleRepository->getSlug($clientId);
    }

    public function all()
    {
        return $this->titleRepository->all();
    }

    public function create(array $property)
    {
        return $this->titleRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->titleRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        return $this->titleRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->titleRepository->delete($id);
    }

    public function firstOrFail()
    {
        return $this->titleRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->titleRepository->pluck($column, $key);
    }

}
