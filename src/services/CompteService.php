<?php

namespace App\Services;

use App\Repositories\CompteRepository;
use App\Entities\Compte;
use App\Core\App;

class CompteService 
{
    private static ?CompteService $instance = null;
    private CompteRepository $compteRepository;

    private function __construct()
    {
        $this->compteRepository = App::getDependencie('CompteRepository');
    }

    public static function getInstance(): CompteService
    {
        if (is_null(self::$instance)) {
            self::$instance = new CompteService();
        }
        return self::$instance;
    }

    public function creerCompteSecondaire(string $numeroTelephone, int $clientId, float $soldeInitial = 0.00): ?Compte
    {
        if (!$this->compteRepository->isNumeroTelephoneUnique($numeroTelephone)) {
            throw new \Exception("Ce numéro de téléphone existe déjà");
        }

        $compte = new Compte($numeroTelephone, $soldeInitial, 'Secondaire', $clientId);
        $id = $this->compteRepository->insert($compte);
        
        if ($id > 0) {
            $compte->setId($id);
            return $compte;
        }
        
        return null;
    }

    public function getTousLesComptes(int $clientId): array
    {
        return $this->compteRepository->getComptesByClientId($clientId);
    }

    public function getComptePrincipal(int $clientId): ?Compte
    {
        return $this->compteRepository->getComptePrincipal($clientId);
    }

    public function getComptesSecondaires(int $clientId): array
    {
        return $this->compteRepository->getComptesSecondaires($clientId);
    }

    public function getCompteById(int $id): ?Compte
    {
        return $this->compteRepository->selectById($id);
    }

    public function updateSolde(int $compteId, float $nouveauSolde): bool
    {
        return $this->compteRepository->updateSolde($compteId, $nouveauSolde);
    }
}