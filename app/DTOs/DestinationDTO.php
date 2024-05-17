<?php

namespace App\DTOs;

class DestinationDTO
{

    public function __construct(
        public readonly string $nom,
    ){}

    public static function fromAdd (array $data)
    {

        return new self(
            nom: $data['nom'],
        );
    }

    public static function fromEdit (array $data)
    {
        return new self(
            nom: $data['nom'],
        );
    }
}
