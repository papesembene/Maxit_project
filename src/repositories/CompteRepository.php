<?php
namespace App\Repositories;

use App\Entities\Compte;
use App\Core\Abstract\AbstractRepository;
use App\Core\Abstract\AbstractEntity;
use PDO;

class CompteRepository extends AbstractRepository
{
    private static ?CompteRepository $instance = null;

    private function __construct()
    {
        parent::__construct();
    }
    
    public static function getInstance(): CompteRepository
    {
        if (is_null(self::$instance)) {
            self::$instance = new CompteRepository();
        }
        return self::$instance;
    }

    public function insert(Compte $compte): int
    {
        $sql = "INSERT INTO compte (telephone, solde, type, client_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $compte->getNumeroTelephone(),
            $compte->getSolde() ? $compte->getSolde() : 0.0,
            $compte->getTypeCompte(),
            $compte->getUser()->getId()
        ]);
        return $this->db->lastInsertId();
    }

    public function isNumeroTelephoneUnique(string $telephone): bool
    {
        $stmt = $this->db->prepare("SELECT COUNT(*) FROM compte WHERE telephone = ?");
        $stmt->execute([$telephone]);
        return $stmt->fetchColumn() == 0;
    }

    public function getComptesByClientId(int $clientId): array
    {
        $stmt = $this->db->prepare("SELECT * FROM compte WHERE client_id = ?");
        $stmt->execute([$clientId]);
        $comptes = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $comptes[] = $this->hydrate($row);
        }
        return $comptes;
    }

    public function getComptePrincipal(int $clientId): ?Compte
    {
        $stmt = $this->db->prepare("SELECT * FROM compte WHERE client_id = ? AND type = 'Principal'");
        $stmt->execute([$clientId]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? $this->hydrate($row) : null;
    }

    public function getComptesSecondaires(int $clientId): array
    {
        $stmt = $this->db->prepare("SELECT * FROM compte WHERE client_id = ? AND type = 'Secondaire'");
        $stmt->execute([$clientId]);
        $comptes = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $comptes[] = $this->hydrate($row);
        }
        return $comptes;
    }

    public function selectById($id): ?Compte
    {
        $stmt = $this->db->prepare("SELECT * FROM compte WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? $this->hydrate($row) : null;
    }

    public function updateSolde(int $compteId, float $nouveauSolde): bool
    {
        $stmt = $this->db->prepare("UPDATE compte SET solde = ? WHERE id = ?");
        return $stmt->execute([$nouveauSolde, $compteId]);
    }

    private function hydrate(array $data): Compte
    {
        $compte = new Compte($data['telephone'], $data['solde'], $data['type'], $data['client_id']);
        $compte->setId($data['id']);
        return $compte;
    }

    public function selectAll() {}
    public function update() {}
    public function delete() {}
    public function isUnique(string $column, string $value): bool { return true; }
}