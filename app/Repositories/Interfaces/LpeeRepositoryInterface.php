<?php

namespace App\Repositories\Interfaces;

use App\DTOs\LpeeDTO;

interface LpeeRepositoryInterface
{
    public function all();
    public function store(LpeeDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);
}















