<?php

namespace App\DTOs;

class UserDTO
{

    public function __construct(
        public readonly string $username,
        public readonly string  $password,
        public readonly string  $role = "user",
    ){}

    public static function fromRegister ($data)
    {

        return new self(
            username: $data['username'],
            password: $data['password'],
        );
    }

    public static function fromLogin ($data)
    {
        return new self(
            username: $data['username'],
            password: $data['password'],

        );
    }

    public static function fromAdd ($data)
    {
        return new self(
            username: $data['username'],
            password: $data['password'],
            role: $data['role'],

        );
    }
}
