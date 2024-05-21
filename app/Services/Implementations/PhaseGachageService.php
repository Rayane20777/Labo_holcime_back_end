<?php

namespace App\Services\Implementations;

use App\DTOs\PhaseGachageDTO;
use App\Repositories\Interfaces\PhaseGachageRepositoryInterface;
use App\Services\Interfaces\PhaseGachageServiceInterface;
use App\Models\PhaseGachage;
class PhaseGachageService implements PhaseGachageServiceInterface
{
    private PhaseGachageRepositoryInterface $repository;

    public function __construct(PhaseGachageRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    
    public function all()
    {
        return $this->repository->all();
    }

    public function store(PhaseGachageDTO $data)
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
        $phase_gachage = PhaseGachage::withTrashed()->findOrFail($id);
        return $phase_gachage->restore();
    }
}
