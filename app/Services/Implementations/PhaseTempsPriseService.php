<?php

namespace App\Services\Implementations;

use App\DTOs\PhaseTempsPriseDTO;
use App\Repositories\Interfaces\PhaseTempsPriseRepositoryInterface;
use App\Services\Interfaces\PhaseTempsPriseServiceInterface;
use App\Models\PhaseTempsPrise;
class PhaseTempsPriseService implements PhaseTempsPriseServiceInterface
{
    private PhaseTempsPriseRepositoryInterface $repository;

    public function __construct(PhaseTempsPriseRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    
    public function all()
    {
        return $this->repository->all();
    }

    public function store(PhaseTempsPriseDTO $data)
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
        $phase_temps_prise = PhaseTempsPrise::withTrashed()->findOrFail($id);
        return $phase_temps_prise->restore();
    }
}
