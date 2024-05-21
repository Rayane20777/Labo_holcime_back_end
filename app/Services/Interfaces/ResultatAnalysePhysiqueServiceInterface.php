<?php

namespace App\Services\Interfaces;

use App\DTOs\ResultatAnalysePhysiqueDTO;

interface ResultatAnalysePhysiqueServiceInterface
{
    public function all();
    public function store(ResultatAnalysePhysiqueDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);

}
