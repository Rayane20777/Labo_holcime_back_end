<?php

namespace App\Repositories\Interfaces;

use App\DTOs\AnalyseChimiqueDTO;

interface AnalyseChimiqueRepositoryInterface
{
    public function all();
    public function store(AnalyseChimiqueDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);
}
