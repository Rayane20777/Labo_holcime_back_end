<?php

namespace App\Repositories\Interfaces;

use App\DTOs\ProportionDTO;

interface ProportionRepositoryInterface
{
    public function all();
    public function store(ProportionDTO $data,float $gypse_sum);
    public function edit(ProportionDTO $data,float $gypse_sum);
    public function destroy(int $id);
    public function restore(int $id);
}
