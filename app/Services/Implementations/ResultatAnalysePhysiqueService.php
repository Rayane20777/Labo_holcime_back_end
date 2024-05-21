<?php

namespace App\Services\Implementations;

use App\DTOs\ResultatAnalysePhysiqueDTO;
use App\Repositories\Interfaces\ResultatAnalysePhysiqueRepositoryInterface;
use App\Services\Interfaces\ResultatAnalysePhysiqueServiceInterface;
use App\Models\ResultatAnalysePhysique;
class ResultatAnalysePhysiqueService implements ResultatAnalysePhysiqueServiceInterface
{
    private ResultatAnalysePhysiqueRepositoryInterface $repository;

    public function __construct(ResultatAnalysePhysiqueRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    
    public function all()
    {
        return $this->repository->all();
    }

    public function store(ResultatAnalysePhysiqueDTO $data)
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
        $resultat_analyse_physique = ResultatAnalysePhysique::withTrashed()->findOrFail($id);
        return $resultat_analyse_physique->restore();
    }
}
