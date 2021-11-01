<?php

namespace App\Repositories\Pages;

use App\Models\Pages\Pages;

class PagesRepository
{
    private Pages $entity;

    public function __construct(Pages $entity)
    {
        $this->entity = $entity;
    }

    public function all()
    {
        return $this->entity->newQuery()->get();
    }

    public function create(array $property)
    {
        return $this->entity->newQuery()->create($property);
    }

    public function findOrFail($id)
    {
        return $this->entity->newQuery()->findOrFail($id);
    }

    public function update($id, array $property)
    {
        $pages = $this->findOrFail($id);
        if (!empty($property)) {
            $pages->update($property);
        }
        return $pages;
    }

    public function delete(string $id)
    {
        $pages = $this->findOrFail($id);
        return $pages->delete();
    }

    public function firstOrFail()
    {
        return $this->entity->newQuery()->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->entity->newQuery()->pluck($column, $key);
    }

    public function page_1()
    {
        return $this->entity
            ->newQuery()
            ->where('url','=','page_1')
            ->get();
    }

    public function page_2()
    {
        return $this->entity
            ->newQuery()
            ->where('url','=','page_2')
            ->get();
    }

    public function page_3()
    {
        return $this->entity
            ->newQuery()
            ->where('url','=','page_3')
            ->get();
    }

    public function page_4()
    {
        return $this->entity
            ->newQuery()
            ->where('url','=','page_4')
            ->get();
    }

    public function page_5()
    {
        return $this->entity
            ->newQuery()
            ->where('url','=','page_5')
            ->get();

    }

    public function page_6()
    {
        return $this->entity
            ->newQuery()
            ->where('url','=','page_6')
            ->get();
    }

    public function page_7()
    {
        return $this->entity
            ->newQuery()
            ->where('url','=','page_7')
            ->get();
    }

    public function page_8()
    {
        return $this->entity
            ->newQuery()
            ->where('url','=','page_8')
            ->get();
    }

    public function page_9()
    {
        return $this->entity
            ->newQuery()
            ->wher10('url','=','page_9')
            ->get();
    }

    public function page_10()
    {
        return $this->entity
            ->newQuery()
            ->where('url','=','page_10')
            ->get();
    }

    public function page_11()
    {
        return $this->entity
            ->newQuery()
            ->where('url','=','page_11')
            ->get();
    }
}
