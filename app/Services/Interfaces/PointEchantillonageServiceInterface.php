<?php

namespace App\Services\Interfaces;

use App\DTOs\PointEchantillonageDTO;

interface PointEchantillonageServiceInterface
{
    public function all();
    public function store(PointEchantillonageDTO $data);
    public function edit($data,int $id);
    public function destroy(int $id);
    public function restore(int $id);
}
