<?php
namespace App\Repositories\Interfaces;

use App\DTOs\AnalyseDTO;

interface AnalyseRepositoryInterface
{
    public function all();
    public function store(AnalyseDTO $data);
    public function edit(AnalyseDTO $data);
    public function destroy(int $id);
    public function restore(int $id);
}
