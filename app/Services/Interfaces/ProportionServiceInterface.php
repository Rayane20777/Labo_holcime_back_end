<?php

namespace App\Services\Interfaces;

use App\DTOs\ProportionDTO;

interface ProportionServiceInterface
{
    public function all();
    public function store(ProportionDTO $data);
    public function edit(ProportionDTO $data);
    public function destroy(int $id);
    public function restore(int $id);
}
