<?php

namespace App\Repositories;
use App\Entities\Compte;
interface ICompteRepository extends IRepository
{
    public function isNumeroTelephoneUnique(string $telephone): bool;
    public function getComptesByClientId(int $clientId): array;
    public function getComptePrincipal(int $clientId): ?Compte;
    public function getComptesSecondaires(int $clientId): array;
    public function selectById($id): ?Compte;
    public function findByTelephone(string $telephone): ?Compte;
    public function hydrate(array $data): Compte;
    public function isUnique(string $column, string $value): bool ; 
    public function updateSolde(int $compteId, float $nouveauSolde): bool;








}