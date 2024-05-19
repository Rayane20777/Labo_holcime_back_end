<?php

namespace App\DTOs;

class MatiereDTO {
    public function __construct(
        public readonly ?int $id,
        public readonly string $nom
    ) {}

    public static function fromAdd(array $data): self
    {
        return new self(
            id: null,
            nom: $data['nom'],
        );
    }

    public static function fromEdit(array $data): self
    {
        return new self(
            id: $data['id'],
            nom: $data['nom'],
        );
    }
}
