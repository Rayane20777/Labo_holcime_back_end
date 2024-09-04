<?php

namespace App\Repositories\Interfaces;

use App\DTOs\ResulatPhysiqueLpeeDTO;

interface ResulatPhysiqueLpeeRepositoryInterface
{
    public function all();
    public function store(ResulatPhysiqueLpeeDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);
}
