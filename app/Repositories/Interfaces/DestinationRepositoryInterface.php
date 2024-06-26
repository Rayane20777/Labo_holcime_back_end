<?php

namespace App\Repositories\Interfaces;

use App\DTOs\DestinationDTO;

interface DestinationRepositoryInterface
{
    public function all();
    public function store(DestinationDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);
}
