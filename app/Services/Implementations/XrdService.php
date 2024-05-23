<?php

namespace App\Services\Implementations;

use App\DTOs\XrdDTO;
use App\Repositories\Interfaces\XrdRepositoryInterface;
use App\Services\Interfaces\XrdServiceInterface;
use App\Models\Xrd;
class XrdService implements XrdServiceInterface
{
    private XrdRepositoryInterface $repository;

    public function __construct(XrdRepositoryInterface $repository)
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
        $analyse_chimique = Xrd::withTrashed()->findOrFail($id);
        return $analyse_chimique->restore();
    }
}
