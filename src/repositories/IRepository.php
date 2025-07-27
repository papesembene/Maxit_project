<?php
namespace App\Repositories;

interface IRepository
{
 
    public function insert(object $entity): int;
}