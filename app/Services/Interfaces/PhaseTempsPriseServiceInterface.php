<?php

namespace App\Services\Interfaces;

use App\DTOs\PhaseTempsPriseDTO;

interface PhaseTempsPriseServiceInterface
{
    public function all();
    public function store(PhaseTempsPriseDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);

}
