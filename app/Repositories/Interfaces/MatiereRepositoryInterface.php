<?php

namespace App\Repositories\Interfaces;

use App\DTOs\MatiereDTO;

interface MatiereRepositoryInterface
{
    public function all();
    public function matiereFilter(int $id);
    public function userMatiereFilter(int $id,$user);
    public function store(MatiereDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);
}
