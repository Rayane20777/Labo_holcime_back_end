<?php

namespace App\Services\Implementations;

use App\DTOs\MatiereDTO;
use App\Repositories\Interfaces\MatiereRepositoryInterface;
use App\Services\Interfaces\MatiereServiceInterface;

class MatiereService implements MatiereServiceInterface
{
    private MatiereRepositoryInterface $repository;

    public function __construct(MatiereRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store(MatiereDTO $data)
    {
        return $this->repository->store($data);
    }

    public function edit(MatiereDTO $data)
    {
        return $this->repository->edit($data);
    }

    public function destroy(int $id)
    {
        return $this->repository->destroy($id);
    }
}
