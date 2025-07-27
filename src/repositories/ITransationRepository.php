<?php
namespace App\Repositories;

interface ITransationRepository extends IRepository
{
    public function getLastTransactionsByCompte(int $compteId, int $limit = 10): array;
    public function getAllTransactionsByCompte(int $compteId): array;

}