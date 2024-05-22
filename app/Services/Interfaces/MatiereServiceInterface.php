<?php

namespace App\Services\Interfaces;

use App\DTOs\MatiereDTO;

interface MatiereServiceInterface
{
    public function all();
    public function matiereFilter(int $id);
    public function store(MatiereDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);

}
