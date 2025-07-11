<?php
namespace App\Core;

use PDO;
use PDOException;

class DataBase
{
    private static ?DataBase $database = null;

    private string $driver;
    private string $host;
    private string $port;
    private string $dbname;
    private string $user;
    private string $pass;

    private ?PDO $conn = null;

    private function __construct()
    {
        
        $this->driver = $_ENV['DB_DRIVER'];
        $this->host = $_ENV['DB_HOST'] ;
        $this->port = $_ENV['DB_PORT'] ;
        $this->dbname = $_ENV['DB_NAME'] ;
        $this->user = $_ENV['DB_USER'] ;
        $this->pass = $_ENV['DB_PASSWORD'];
    }

    public static function getInstance(): DataBase
    {
        if (self::$database === null) {
            self::$database = new DataBase();
        }
        return self::$database;
    }

    public function connect(): PDO
    {
        if ($this->conn === null) 
        {
            try {
                // $dsn = "{$this->driver}:host={$this->host};port={$this->port};dbname={$this->dbname};charset=utf8";
                $dsn = "{$this->driver}:host={$this->host};port={$this->port};dbname={$this->dbname}";
                $this->conn = new PDO($dsn, $this->user, $this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                die("Erreur de connexion PDO : " . $e->getMessage());
            }
        }
        return $this->conn;
    }
}
