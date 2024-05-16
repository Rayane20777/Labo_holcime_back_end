<?php

namespace App\DTOs;

class UserDTO
{

    public function __construct(
        public readonly string $username,
        public readonly string  $password,
        public readonly string  $role = 'user',
    ){}

    public static function fromRegister (array $data)
    {

        return new self(
            username: $data['username'],
            password: $data['password'],
        );
    }

    public static function fromLogin (array $data)
    {
        return new self(
            username: $data['username'],
            password: $data['password']
        );
    }
}
