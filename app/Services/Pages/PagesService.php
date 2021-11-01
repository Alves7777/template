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

    public function page_1()
    {
        return $this->pagesRepository->page_1();
    }

    public function page_2()
    {
        return $this->pagesRepository->page_2();
    }

    public function page_3()
    {
        return $this->pagesRepository->page_3();
    }

    public function page_4()
    {
        return $this->pagesRepository->page_4();
    }

    public function page_5()
    {
        return $this->pagesRepository->page_5();
    }

    public function page_6()
    {
        return $this->pagesRepository->page_6();
    }

    public function page_7()
    {
        return $this->pagesRepository->page_7();
    }

    public function page_8()
    {
        return $this->pagesRepository->page_8();
    }

    public function page_9()
    {
        return $this->pagesRepository->page_9();
    }

    public function page_10()
    {
        return $this->pagesRepository->page_10();
    }

    public function page_11()
    {
        return $this->pagesRepository->page_11();
    }
}
