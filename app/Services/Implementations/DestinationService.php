<?php

namespace App\Services\Implementations;

use App\DTOs\DestinationDTO;
use App\Repositories\Interfaces\DestinationRepositoryInterface;
use App\Services\Interfaces\DestinationServiceInterface;

class DestinationService implements DestinationServiceInterface
{
    private DestinationRepositoryInterface $repository;

    public function __construct(DestinationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function all()
    {
        return $this->repository->all();
    }

    public function store(DestinationDTO $data)
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
