<?php

namespace App\Repositories\Contact;

use App\Models\Contact\Contact;

class ContactRepository
{
    private Contact $entity;

    public function __construct(Contact $entity)
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
        $contact = $this->findOrFail($id);
        if (!empty($property)) {
            $contact->update($property);
        }
        return $contact;
    }

    public function delete(string $id)
    {
        $contact = $this->findOrFail($id);

        return $contact->delete();
    }

    public function firstOrFail()
    {
        return $this->entity->newQuery()->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->entity->newQuery()->pluck($column, $key);
    }

    public function getSlug($clientId)
    {
        return $this->entity->newQuery()
            ->where('client_id', $clientId)
            ->orderBy('created_at')
            ->get();
    }
}
