<?php

namespace App\Services\Implementations;

use App\DTOs\ProportionDTO;
use App\Exceptions\ProportionNotFoundException;
use App\Repositories\Interfaces\ProportionRepositoryInterface;
use App\Services\Interfaces\ProportionServiceInterface;
use App\Models\Proportion;

class ProportionService implements ProportionServiceInterface
{
    private ProportionRepositoryInterface $repository;

    public function __construct(ProportionRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    private function calculateGypse(ProportionDTO $data): float
    {
        return ($data->KK_G ?? 0) + ($data->CAL_G ?? 0) + ($data->CV_G ?? 0) + ($data->LAIT_G ?? 0);
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function store(ProportionDTO $data)
    {
        $gypse = $this->calculateGypse($data);
        return $this->repository->store($data, $gypse);
    }

    public function edit(ProportionDTO $data)
    {
        $proportion = Proportion::find($data->id);
        if (!$proportion) {
            throw new ProportionNotFoundException();
        }

        $gypse = $this->calculateGypse($data);
        return $this->repository->edit($data, $gypse);
    }

    public function destroy(int $id)
    {
        $proportion = Proportion::find($id);
        if (!$proportion) {
            throw new ProportionNotFoundException();
        }

        return $this->repository->destroy($id);
    }

    public function restore(int $id)
    {
        $proportion = Proportion::withTrashed()->find($id);
        if (!$proportion) {
            throw new ProportionNotFoundException();
        }

        return $this->repository->restore($id);
    }
}
