<?php

namespace App\DTOs;

class DestinationDTO {
    public function __construct(
        public readonly string $nom,
        public readonly ?int $matiere_id = null,
        public readonly ?int $id = null // For edit and destroy methods
    ) {}

    public static function fromAdd(array $data): self
    {
        return new self(
            nom: $data['nom'],
            matiere_id: $data['matiere_id'] ?? null
        );
    }

    public static function fromEdit(array $data): self
    {
        return new self(
            id: $data['id'],
            nom: $data['nom'],
            matiere_id: $data['matiere_id'] ?? null
        );
    }
}
