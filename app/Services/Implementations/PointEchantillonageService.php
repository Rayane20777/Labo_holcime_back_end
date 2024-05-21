<?php

namespace App\Services\Implementations;

use App\DTOs\PointEchantillonageDTO;
use App\Repositories\Interfaces\PointEchantillonageRepositoryInterface;
use App\Services\Interfaces\PointEchantillonageServiceInterface;

class PointEchantillonageService implements PointEchantillonageServiceInterface
{
    private PointEchantillonageRepositoryInterface $repository;

    public function __construct(PointEchantillonageRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function all()
    {
        return $this->repository->all();
    }

    public function store(PointEchantillonageDTO $data)
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
        return $this->repository->restore($id);
    }

}
