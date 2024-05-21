<?php

namespace App\Services\Interfaces;

use App\DTOs\PhaseGachageDTO;

interface PhaseGachageServiceInterface
{
    public function all();
    public function store(PhaseGachageDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);

}
