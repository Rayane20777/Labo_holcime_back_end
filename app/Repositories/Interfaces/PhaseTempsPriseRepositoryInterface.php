<?php

namespace App\Repositories\Interfaces;

use App\DTOs\PhaseTempsPriseDTO;

interface PhaseTempsPriseRepositoryInterface
{
    public function all();
    public function store(PhaseTempsPriseDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);
}
