<?php

namespace App\Services\Implementations;

use App\DTOs\MatiereDTO;
use App\Repositories\Interfaces\MatiereRepositoryInterface;
use App\Services\Interfaces\MatiereServiceInterface;
use App\Models\Matiere;
use Illuminate\Support\Facades\Auth;

class MatiereService implements MatiereServiceInterface
{
    private MatiereRepositoryInterface $repository;

    public function __construct(MatiereRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    
    public function all()
    {
        return $this->repository->all();
    }

    public function matiereFilter(int $id)
    {
        $status = 'locked';
        return $this->repository->matiereFilter($id,$status);
    }
    
    public function userMatiereFilter(int $id)
    {
        $user = Auth::id();

        return $this->repository->userMatiereFilter($id,$user);
    }

    public function store(MatiereDTO $data)
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
        $matiere = Matiere::withTrashed()->findOrFail($id);
        return $matiere->restore();
    }
}
