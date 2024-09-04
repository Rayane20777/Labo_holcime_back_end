<?php

namespace App\Services\Implementations;

use App\DTOs\ResulatPhysiqueLpeeDTO;
use App\Repositories\Interfaces\ResulatPhysiqueLpeeRepositoryInterface;
use App\Services\Interfaces\ResulatPhysiqueLpeeServiceInterface;
use App\Models\ResulatPhysiqueLpee;
class ResulatPhysiqueLpeeService implements ResulatPhysiqueLpeeServiceInterface
{
    private ResulatPhysiqueLpeeRepositoryInterface $repository;

    public function __construct(ResulatPhysiqueLpeeRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    
    public function all()
    {
        return $this->repository->all();
    }

    public function store(ResulatPhysiqueLpeeDTO $data)
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
        $resultat_analyse_physique = ResulatPhysiqueLpee::withTrashed()->findOrFail($id);
        return $resultat_analyse_physique->restore();
    }
}
