<?php
namespace App\Entities;

use App\Core\Abstract\AbstractEntity;

class Compte extends AbstractEntity
{
    private int $id;
    private string $numero_compte;
    private float $solde;
    private string $type_compte; // 'principal' ou 'secondaire'
    private string $numero_telephone;
    private int $user_id;

    public function __construct(
        int $id = 0,
        string $numero_compte = '',
        float $solde = 0.0,
        string $type_compte = 'Principal',
        string $numero_telephone = '',
        int $user_id = 0
    ) {
        $this->id = $id;
        $this->numero_compte = $numero_compte;
        $this->solde = $solde;
        $this->type_compte = $type_compte;
        $this->numero_telephone = $numero_telephone;
        $this->user_id = $user_id;
    }

    public function getId(): int { return $this->id; }
    public function getNumeroCompte(): string { return $this->numero_compte; }
    public function getSolde(): float { return $this->solde; }
    public function getTypeCompte(): string { return $this->type_compte; }
    public function getNumeroTelephone(): string { return $this->numero_telephone; }
    public function getUserId(): int { return $this->user_id; }

    public function setId(int $id): void { $this->id = $id; }
    public function setNumeroCompte(string $numero): void { $this->numero_compte = $numero; }
    public function setSolde(float $solde): void { $this->solde = $solde; }
    public function setTypeCompte(string $type): void { $this->type_compte = $type; }
    public function setNumeroTelephone(string $numero): void { $this->numero_telephone = $numero; }
    public function setUserId(int $id): void { $this->user_id = $id; }
}