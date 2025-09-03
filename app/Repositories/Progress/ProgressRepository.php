<?php

namespace App\Repositories\Progress;

use App\Models\Progress\Progress;
use App\Traits\UploadFile;
use App\Traits\HasClientId;

class ProgressRepository
{
    private Progress $entity;
    use UploadFile, HasClientId;

    /**
     * @param Progress $entity
     */
    public function __construct(Progress $entity)
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
        return $this->entity->newQuery()
            ->where('client_id', $this->getClientId($clientId))
            ->get();
    }

    /**
     * Cria um novo registro para o cliente.
     * @param array $property
     * @param int|null $clientId
     * @return Progress
     */
    public function create(array $property): Progress
    {
        $clientId = $this->getClientId();
        $property['client_id'] = $clientId;
        return $this->entity->newQuery()->create($property);
    }

    /**
     * Busca um registro pelo ID e client_id.
     * @param int|string $id
     * @param int|null $clientId
     * @return Progress
     */
    public function findOrFail($id)
    {
        $clientId = $this->getClientId();
        return $this->entity->newQuery()->where('client_id', $clientId)->findOrFail($id);
    }

    /**
     * Atualiza um registro do cliente.
     * @param int|string $id
     * @param array $property
     * @param int|null $clientId
     * @return Progress
     */
    public function update($id, array $property): Progress
    {
        $data = $this->findOrFail($id);
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
    public function delete($id)
    {
        $data = $this->findOrFail($id);
        if (!empty($data->logo)) {
            self::removePhoto($data->logo);
        }
        return $data->delete();
    }

    /**
     * Retorna o primeiro registro do cliente.
     * @param int|null $clientId
     * @return Progress
     */
//    public function firstOrFail($clientId = null): Progress
//    {
//        return $this->queryByClient($clientId)->firstOrFail();
//    }

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
