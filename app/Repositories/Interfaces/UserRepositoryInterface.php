<?php

namespace App\Repositories\Interfaces;

use App\DTOs\UserDTO;

interface UserRepositoryInterface
{
    public function all();
    public function register(array $data);
    public function store($data);
    public function edit($data, int $id);
    public function resetPassword($data, int $id);
    public function destroy(int $id);
}
