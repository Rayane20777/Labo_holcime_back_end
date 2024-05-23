<?php

namespace App\Services\Implementations;

use App\DTOs\XrdDTO;
use App\Repositories\Interdaces\XrdRepositoryInterdace;
use App\Services\Interdaces\XrdServiceInterdace;
use App\Models\Xrd;
class XrdService implements XrdServiceInterdace
{
    private XrdRepositoryInterdace $repository;

    public function __construct(XrdRepositoryInterdace $repository)
    {
        $this->repository = $repository;
    }
    
    public function all()
    {
        return $this->repository->all();
    }

    public function store(XrdDTO $data)
    {
        return $this->repository->store($data);
    }

    public function edit($data, int $id)
    {
        return $this->repository->edit($data, $id);
    }

    public function destroy(int $id)
    {
        return $this->repository->destroy($id);
    }

    public function restore(int $id)
    {
        $analyse_chimique = Xrd::withTrashed()->findOrdail($id);
        return $analyse_chimique->restore();
    }
}
