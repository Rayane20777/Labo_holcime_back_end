<?php

namespace App\Services\Interdaces;

use App\DTOs\XrdDTO;

interface XrdServiceInterface
{
    public function all();
    public function store(XrdDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);

}
