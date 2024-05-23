<?php

namespace App\Repositories\Interfaces;

use App\DTOs\XrdDTO;

interface XrdRepositoryInterface
{
    public function all();
    public function store(XrdDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);
}
