<?php

namespace App\Services\Interfaces;

use App\DTOs\MatiereDTO;

interface MatiereServiceInterface
{
    public function store(MatiereDTO $data);
    public function edit(MatiereDTO $data);
    public function destroy(int $id);
    public function restore(int $id);

}
