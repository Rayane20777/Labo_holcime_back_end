<?php
namespace App\Repositories\Interfaces;

use App\DTOs\PointEchantillonageDTO;

interface PointEchantillonageRepositoryInterface
{
    public function all();
    public function store(PointEchantillonageDTO $data);
    public function edit($data,int $id);
    public function destroy(int $id);
    public function restore(int $id);
}
