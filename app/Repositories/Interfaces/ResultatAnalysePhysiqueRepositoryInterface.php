<?php

namespace App\Repositories\Interfaces;

use App\DTOs\ResultatAnalysePhysiqueDTO;

interface ResultatAnalysePhysiqueRepositoryInterface
{
    public function all();
    public function store(ResultatAnalysePhysiqueDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);
}
