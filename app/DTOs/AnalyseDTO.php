<?php

namespace App\DTOs;
class AnalyseDTO {
    public function __construct(
        public ?int $id,
        public string $date_prelevement,
        public ?string $date_gachage,
        public string $status = 'pending',
        public string $matiere_id,
        public int $destination_id,
        public int $point_echantillonage_id,
        public int $user_id,
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
            user_id: $data['user_id']
        );
    }
    // public static function fromEdit(array $data): self
    // {
    //     $id = $data['id'] ?? null;
    //     $existingDateGachage = null;
    
    //     if ($id !== null) {
    //         $existingAnalyse = Analyse::findOrFail($id);
    //         $existingDateGachage = $existingAnalyse->date_gachage;
    //     }
    
    //     return new self(
    //         id: $id,
    //         date_prelevement: $data['date_prelevement'] ?? '',
    //         date_gachage: $data['date_gachage'] ?? $existingDateGachage,
    //         matiere_id: $data['matiere_id'] ?? '',
    //         destination_id: $data['destination_id'] ?? 0,
    //         point_echantillonage_id: $data['point_echantillonage_id'] ?? 0
    //     );
    // }
    
    
    
}
