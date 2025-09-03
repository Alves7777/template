<?php

namespace App\Services\Contact;

use App\Repositories\Contact\ContactRepository;

class ContactService
{
    private ContactRepository $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function all($clientId = null)
    {
        return $this->contactRepository->all($clientId);
    }

    public function create(array $property, $clientId = null)
    {
        return $this->contactRepository->create($property, $clientId);
    }

    public function findOrFail($id, $clientId = null)
    {
        return $this->contactRepository->findOrFail($id, $clientId);
    }

    public function update($id, array $property, $clientId = null)
    {
        return $this->contactRepository->update($id, $property, $clientId);
    }

    public function delete(string $id, $clientId = null)
    {
        return $this->contactRepository->delete($id, $clientId);
    }

}
