<?php

namespace App\Services\Interfaces;

use App\DTOs\XrfDTO;

interface XrfServiceInterface
{
    public function all();
    public function store(XrfDTO $data);
    public function edit($data, int $id);
    public function destroy(int $id);
    public function restore(int $id);

}
