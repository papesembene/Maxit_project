<?php
namespace App\Repositories;

interface IUserRepository extends IRepository
{
    public function findUser(string $numero): ?array;
    public function isUnique(string $column, string $value): bool;
   
}