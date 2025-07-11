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
        $sql = "INSERT INTO compte
         (telephone, solde, type,  client_id)
         VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $compte->getNumeroTelephone(),
            $compte->getSolde()? $compte->getSolde() : 0.0,
            $compte->getTypeCompte(),
            $compte->getUser()->getId()
        ]);
        return $this->db->lastInsertId();
    }

    public function isUnique(string $column, string $value): bool
    {
        $stmt = $this->db->prepare("SELECT COUNT(*) FROM compte WHERE $column = ?");
        $stmt->execute([$value]);
        return $stmt->fetchColumn() == 0;
    }

    public  function selectAll() 
    {

    }

    public function update() {

    }
     public function delete(){

    }
    public function selectById($id){

    }
}
