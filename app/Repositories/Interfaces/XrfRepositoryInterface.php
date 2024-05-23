<?php

namespace App\Repositories\Interfaces;

use App\DTOs\XrfDTO;

interface XrfRepositoryInterface
{
    public function all();
    public function store(XrfDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);
}
