<?php

namespace App\Services\Contact;

use App\Repositories\Contact\ContactRepository;

class ContactService extends ContactRepository
{
    private ContactRepository $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function all()
    {
        return $this->contactRepository->all();
    }

    public function create(array $property)
    {
        return $this->contactRepository->create($property);
    }

    public function findOrFail($id)
    {
        return $this->contactRepository->findOrFail($id);
    }

    public function update($id, array $property)
    {
        return $this->contactRepository->update($id, $property);
    }

    public function delete(string $id)
    {
        return $this->contactRepository->delete($id);
    }

    public function firstOrFail()
    {
        return $this->contactRepository->firstOrFail();
    }

    public function pluck(string $column, string $key)
    {
        return $this->contactRepository->pluck($column, $key);
    }

}
