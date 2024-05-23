<?php

namespace App\Services\Implementations;

use App\DTOs\XrfDTO;
use App\Repositories\Interfaces\XrfRepositoryInterface;
use App\Services\Interfaces\XrfServiceInterface;
use App\Models\Xrf;
class XrfService implements XrfServiceInterface
{
    private XrfRepositoryInterface $repository;

    public function __construct(XrfRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    
    public function all()
    {
        return $this->repository->all();
    }

    public function store(XrfDTO $data)
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
        $analyse_chimique = Xrf::withTrashed()->findOrFail($id);
        return $analyse_chimique->restore();
    }
}
