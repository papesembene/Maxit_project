<?php

namespace App\Entities;

class Role
{
    private int $id;
    private string $libelle;

    public function __construct(int $id = 0, string $libelle = "")
    {
        $this->id = $id;
        $this->libelle = $libelle;
    }

    public function getId(): int{return $this->id;}

    public function setId(int $id): void{$this->id = $id;}

    public function getLibelle(): string{return $this->libelle;}

    public function setLibelle(string $libelle): void{$this->libelle = $libelle;}
    
}