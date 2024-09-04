<?php 
namespace App\DTOs;

class LpeeDTO {
    public function __construct(
        public readonly ?int $id,
        public readonly ?string $P_AF,
        public readonly ?string $SO3,
        public readonly ?string $SiO2,
        public readonly ?string $Fe2O3,
        public readonly ?string $Al2O3,
        public readonly ?string $CaO,
        public readonly ?string $MgO,
        public readonly ?string $Cl,
        public readonly ?string $Na2O,
        public readonly ?string $K2O,
        public readonly ?string $insoluble,
        public readonly ?string $regulateur_de_prise,
        public readonly ?string $ajout_calcaire,
        public readonly ?string $teneur_en_pouzzolane,
        public readonly ?string $clinker,
        public readonly ?string $laitier,
        public readonly ?string $sulfures,
        public readonly ?string $perte_au_feu_500,
        public readonly int $analyse_id
    )
    {}

    public static function FromAdd(array $data): self
    {
        return new self(
            id: null,
            P_AF: $data['P_AF'] ?? null,
            SO3: $data['SO3'] ?? null,
            SiO2: $data['SiO2'] ?? null,
            Fe2O3: $data['Fe2O3'] ?? null,
            Al2O3: $data['Al2O3'] ?? null,
            CaO: $data['CaO'] ?? null,
            MgO: $data['MgO'] ?? null,
            Cl: $data['Cl'] ?? null,
            Na2O: $data['Na2O'] ?? null,
            K2O: $data['K2O'] ?? null,
            insoluble: $data['insoluble'] ?? null,
            regulateur_de_prise: $data['regulateur_de_prise'] ?? null,
            ajout_calcaire: $data['ajout_calcaire'] ?? null,
            teneur_en_pouzzolane: $data['teneur_en_pouzzolane'] ?? null,
            clinker: $data['clinker'] ?? null,
            laitier: $data['laitier'] ?? null,
            sulfures: $data['sulfures'] ?? null,
            perte_au_feu_500: $data['perte_au_feu_500'] ?? null,
            analyse_id: $data['analyse_id']
        );
    }
}
