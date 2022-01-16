<?php

namespace App\Repositories\SectionFive;

use App\Models\SectionFive\SectionFive;
use App\Traits\UploadFile;

class SectionFiveRepository
{
    private SectionFive $entity;
    use UploadFile;

    public function __construct(SectionFive $entity)
    {
        $this->entity = $entity;
    }

    public function all()
    {
        return $this->entity->newQuery()
            ->orderBy('created_at')
            ->get();
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
        $sectionfive = $this->findOrFail($id);
        if (!empty($property)) {
            self::removePhoto($sectionfive->image);
            self::removePhoto($sectionfive->background);

            $sectionfive->update($property);
        }
        return $sectionfive;
    }

    public function delete(string $id)
    {
        $sectionfive = $this->findOrFail($id);
        self::removePhoto($sectionfive->image);
        self::removePhoto($sectionfive->background);

        return $sectionfive->delete();
    }

    public function firstOrFail()
    {
        return $this->entity->newQuery()->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->entity->newQuery()->pluck($column, $key);
    }
}
