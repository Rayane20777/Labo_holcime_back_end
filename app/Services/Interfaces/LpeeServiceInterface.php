<?php

namespace App\Services\Interfaces;

use App\DTOs\LpeeDTO;

interface LpeeServiceInterface
{
    public function all();
    public function store(LpeeDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);

}

