<?php

namespace App\Services\Master;

use App\Repositories\Master\MasterRepository;

class MasterService
{
    private MasterRepository $masterRepository;

    public function __construct(MasterRepository $masterRepository)
    {
        $this->masterRepository = $masterRepository;
    }

    public function all()
    {
        return $this->masterRepository->all();
    }

    public function paginate()
    {
        return $this->masterRepository->paginate();
    }

    public function findOrFail($id)
    {
        return $this->masterRepository->findOrFail($id);
    }
}
