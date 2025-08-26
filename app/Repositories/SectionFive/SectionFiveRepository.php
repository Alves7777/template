<?php

namespace App\Repositories\SectionFive;

use App\Models\SectionFive\SectionFive;
use App\Traits\UploadFile;
use App\Traits\HasClientId;

class SectionFiveRepository
{
    private SectionFive $entity;
    use UploadFile;
    use HasClientId;

    public function __construct(SectionFive $entity)
    {
        $this->entity = $entity;
    }

    public function all($clientId = null)
    {
        return $this->queryByClient($clientId)->orderBy('created_at')->get();
    }

    public function create(array $property, $clientId = null)
    {
        $clientId = $this->getClientId($clientId);
        $property['client_id'] = $clientId;
        return $this->entity->newQuery()->create($property);
    }

    public function findOrFail($id, $clientId = null)
    {
        return $this->queryByClient($clientId)->findOrFail($id);
    }

    public function update($id, array $property, $clientId = null)
    {
        $sectionfive = $this->findOrFail($id, $clientId);
        if (!empty($property)) {
            self::removePhoto($sectionfive->image);
            self::removePhoto($sectionfive->background);
            $sectionfive->update($property);
        }
        return $sectionfive;
    }

    public function delete(string $id, $clientId = null)
    {
        $sectionfive = $this->findOrFail($id, $clientId);
        self::removePhoto($sectionfive->image);
        self::removePhoto($sectionfive->background);
        return $sectionfive->delete();
    }

    public function firstOrFail($clientId = null)
    {
        return $this->queryByClient($clientId)->firstOrFail();
    }

    public function pluck(string $column, string $key, $clientId = null)
    {
        return $this->queryByClient($clientId)->pluck($column, $key);
    }

    private function queryByClient($clientId = null)
    {
        $clientId = $this->getClientId($clientId);
        return $this->entity->newQuery()->where('client_id', $clientId);
    }
}
