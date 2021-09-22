<?php

namespace App\Services\Navbar;

use App\Repositories\Navbar\NavbarRepository;
use App\Traits\UploadFile;

class NavbarService
{
    private NavbarRepository $navbarRepository;
    use UploadFile;

    public function __construct(NavbarRepository $navbarRepository)
    {
        $this->navbarRepository = $navbarRepository;
    }

    public function all()
    {
        return $this->navbarRepository->all();
    }

    public function create(array $property)
    {
        if (!empty($property['logo'])) {
            $property['logo'] = $this->uploadPhoto($property['logo']);
        }
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
