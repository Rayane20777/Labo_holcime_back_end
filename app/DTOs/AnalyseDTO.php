<?php

namespace App\DTOs;

class AnalyseDTO {
    public function __construct(
        public ?int $id,
        public string $date_prelevement,
        public string $date_gachage,
        public string $matiere_id,
        public int $destination_id,
        public int $point_echantillonage_id
    ) {}

    public static function fromAdd(array $data): self
    {
        return new self(
            id: null,
            date_prelevement: $data['date_prelevement'],
            date_gachage: $data['date_gachage'],
            matiere_id: $data['matiere_id'],
            destination_id: $data['destination_id'],
            point_echantillonage_id: $data['point_echantillonage_id'],
        );
    }

    public static function fromEdit(array $data): self
    {
        return new self(
            id: $data['id'],
            date_prelevement: $data['date_prelevement'],
            date_gachage: $data['date_gachage'],
            matiere_id: $data['matiere_id'],
            destination_id: $data['destination_id'],
            point_echantillonage_id: $data['point_echantillonage_id'],
        );
    }
}

