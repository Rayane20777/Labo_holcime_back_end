<?php

namespace App\Services\Implementations;

use App\DTOs\LpeeDTO;
use App\Repositories\Interfaces\LpeeRepositoryInterface;
use App\Services\Interfaces\LpeeServiceInterface;
use App\Models\Lpee;
class LpeeService implements LpeeServiceInterface
{
    private LpeeRepositoryInterface $repository;

    public function __construct(LpeeRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    
    public function all()
    {
        return $this->repository->all();
    }

    public function store(LpeeDTO $data)
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
        $lpee = Lpee::withTrashed()->findOrFail($id);
        return $lpee->restore();
    }
}
