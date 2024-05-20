<?php

namespace App\Repositories\Interfaces;

use App\DTOs\MatiereDTO;

interface MatiereRepositoryInterface
{
    public function store(MatiereDTO $data);
    public function edit(MatiereDTO $data);
    public function destroy(int $id);
    public function restore(int $id);
}
