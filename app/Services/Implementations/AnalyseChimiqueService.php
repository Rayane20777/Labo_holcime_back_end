<?php

namespace App\Services\Implementations;

use App\DTOs\AnalyseChimiqueDTO;
use App\Repositories\Interfaces\AnalyseChimiqueRepositoryInterface;
use App\Services\Interfaces\AnalyseChimiqueServiceInterface;
use App\Models\AnalyseChimique;
class AnalyseChimiqueService implements AnalyseChimiqueServiceInterface
{
    private AnalyseChimiqueRepositoryInterface $repository;

    public function __construct(AnalyseChimiqueRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    
    public function all()
    {
        return $this->repository->all();
    }

    public function store(AnalyseChimiqueDTO $data)
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
        $analyse_chimique = AnalyseChimique::withTrashed()->findOrFail($id);
        return $analyse_chimique->restore();
    }
}
