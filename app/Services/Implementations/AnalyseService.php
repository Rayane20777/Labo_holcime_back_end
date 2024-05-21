<?php

namespace App\Services\Implementations;

use App\DTOs\AnalyseDTO;
use App\Repositories\Interfaces\AnalyseRepositoryInterface;
use App\Services\Interfaces\AnalyseServiceInterface;
use Illuminate\Support\Facades\Auth;

class AnalyseService implements AnalyseServiceInterface
{
    private AnalyseRepositoryInterface $repository;

    public function __construct(AnalyseRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    
    public function all()
    {
        return $this->repository->all();
    }

    public function store(AnalyseDTO $data)
    {
        $data->user_id = Auth::id();
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

    public function filter(array $filters)
    {
        return $this->repository->filter($filters);
    }


}
