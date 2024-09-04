<?php

namespace App\Services\Interfaces;

use App\DTOs\UserDTO;

interface UserServiceInterface
{
    public function all();
    
    public function store(UserDTO $data);
    public function register(UserDTO $data);
    public function login(UserDTO $data);
    public function edit($data, int $id);
    public function resetPassword($data, int $id);
    public function destroy(int $id);
    public function createToken(string $token);

    public function logout();
}
