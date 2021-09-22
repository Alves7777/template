<?php

namespace App\Services\Topbar;

use App\Repositories\Topbar\TopbarRepository;
use App\Traits\UploadFile;

class TopbarService
{
    private TopbarRepository $navbarRepository;

    public function __construct(TopbarRepository $navbarRepository)
    {
        $this->navbarRepository = $navbarRepository;
    }

    public function all()
    {
        return $this->navbarRepository->all();
    }

    public function create(array $property)
    {
        return $this->navbarRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->navbarRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        return $this->navbarRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->navbarRepository->delete($id);
    }

    public function get()
    {
    }

    public function firstOrFail()
    {
        return $this->navbarRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->navbarRepository->pluck($column, $key);
    }

}
