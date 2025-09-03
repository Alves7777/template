<?php

namespace App\Repositories\Navbar;

use App\Models\NavBar\Navbar;
use App\Traits\UploadFile;
use App\Traits\HasClientId;



class NavbarRepository
{
    private Navbar $entity;
    use UploadFile, HasClientId;

    /**
     * @param Navbar $entity
     */
    public function __construct(Navbar $entity)
    {
        $this->entity = $entity;
    }

    /**
     * Retorna todos os registros do cliente.
     * @param int|null $clientId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all($clientId = null)
    {
        return $this->queryByClient($clientId)->get();
    }

    /**
     * Cria um novo registro para o cliente.
     * @param array $property
     * @param int|null $clientId
     * @return Navbar
     */
    public function create(array $property, $clientId = null): Navbar
    {
        $clientId = $this->getClientId();
        $property['client_id'] = $clientId;
        return $this->entity->newQuery()->create($property);
    }

    /**
     * Busca um registro pelo ID e client_id.
     * @param int|string $id
     * @param int|null $clientId
     * @return Navbar
     */
    public function findOrFail($id, $clientId = null): Navbar
    {
        return $this->queryByClient($clientId)->findOrFail($id);
    }

    /**
     * Atualiza um registro do cliente.
     * @param int|string $id
     * @param array $property
     * @param int|null $clientId
     * @return Navbar
     */
    public function update($id, array $property, $clientId = null): Navbar
    {
        $data = $this->findOrFail($id, $clientId);
        if (!empty($property)) {
            if (!empty($data->logo)) {
                self::removePhoto($data->logo);
            }
            $data->update($property);
        }
        return $data;
    }

    /**
     * Deleta um registro do cliente.
     * @param int|string $id
     * @param int|null $clientId
     * @return bool|null
     */
    public function delete($id, $clientId = null): ?bool
    {
        $data = $this->findOrFail($id, $clientId);
        if (!empty($data->logo)) {
            self::removePhoto($data->logo);
        }
        return $data->delete();
    }

    /**
     * Retorna o primeiro registro do cliente.
     * @param int|null $clientId
     * @return Navbar
     */
    public function firstOrFail($clientId = null): Navbar
    {
        return $this->queryByClient($clientId)->firstOrFail();
    }

    /**
     * Pluck de colunas do cliente.
     * @param string $column
     * @param string $key
     * @param int|null $clientId
     * @return \Illuminate\Support\Collection
     */
    public function pluck(string $column, string $key, $clientId = null)
    {
        return $this->queryByClient($clientId)->pluck($column, $key);
    }

    /**
     * Query base filtrando por client_id.
     * @param int|null $clientId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    private function queryByClient($clientId = null)
    {
        $clientId = $this->getClientId($clientId);
        return $this->entity->newQuery()->where('client_id', $clientId);
    }
}
