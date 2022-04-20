<?php

namespace App\Repositories\SectionTwo;

use App\Models\SectionTwo\SectionTwo;
use Illuminate\Database\Eloquent\Collection;

class SectionTwoRepository
{
    private SectionTwo $entity;

    public function __construct()
    {
        $this->entity = app(SectionTwo::class);
    }

    public function all(): Collection
    {
        return $this->entity
            ->newQuery()
            ->orderBy('created_at', 'DESC')
            ->get();
    }

    public function create(array $property)
    {
        return $this->entity->newQuery()->create($property);
    }

    public function update(string $id, array $property)
    {
        $sectionTwo = $this->findOrFail($id);
        return $sectionTwo->update($property);
    }

    public function findOrFail(string $id)
    {
        return $this->entity->newQuery()->findOrFail($id);
    }

    public function delete(string $id)
    {
        $sectionTwo = $this->findOrFail($id);
        return $sectionTwo->delete();
    }

}
