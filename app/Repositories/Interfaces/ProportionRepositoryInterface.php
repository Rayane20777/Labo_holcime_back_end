<?php

namespace App\Repositories\Interfaces;

use App\DTOs\ProportionDTO;

interface ProportionRepositoryInterface
{
    public function all();
    public function store(ProportionDTO $data,float $gypse_sum, array $pourcentage);
    public function edit($data,int $id,float $gypse_sum,array $pourcentage);
    public function destroy(int $id);
    public function restore(int $id);
}
