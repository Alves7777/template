<?php

namespace App\Services\Pages;

use App\Repositories\Pages\PagesRepository;

class PagesService
{
    private PagesRepository $pagesRepository;

    public function __construct(PagesRepository $pagesRepository)
    {
        $this->pagesRepository = $pagesRepository;
    }

    public function all()
    {
        return $this->pagesRepository->all();
    }

    public function create(array $property)
    {
        return $this->pagesRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->pagesRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        return $this->pagesRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->pagesRepository->delete($id);
    }

    public function firstOrFail()
    {
        return $this->pagesRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->pagesRepository->pluck($column, $key);
    }

}
