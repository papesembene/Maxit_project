<?php
require_once __DIR__ . '/../vendor/autoload.php';

$driver = getenv('DB_DRIVER') ?: 'pgsql';
$host = getenv('DB_HOST') ?: '127.0.0.1';
$port = getenv('DB_PORT') ?: '5432';
$username = getenv('DB_USER') ?: 'postgres';
$password = getenv('DB_PASSWORD') ?: 'passer';
$dbName = getenv('DB_NAME') ?: 'maxit_sa';

try {
    $dsn = "$driver:host=$host;port=$port;dbname=$dbName";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Seed Profil
    $pdo->exec("INSERT INTO profil (role) VALUES ('Client'), ('Service Commercial') ON CONFLICT DO NOTHING;");

    // Seed Utilisateur
    $pdo->exec("INSERT INTO utilisateur (nom, numero_cni, photo_recto_cni, photo_verso_cni, profil_id, password) VALUES
        ('John Doe', 'CNI123456', 'recto1.png', 'verso1.png', 1, 'password1'),
        ('Jane Smith', 'CNI654321', 'recto2.png', 'verso2.png', 2, 'password2')
        ON CONFLICT DO NOTHING;");

    // Seed Compte
    $pdo->exec("INSERT INTO compte (telephone, solde, type, client_id) VALUES
        ('770000001', 10000.00, 'Principal', 1),
        ('770000002', 5000.00, 'Secondaire', 1),
        ('770000003', 15000.00, 'Principal', 2)
        ON CONFLICT DO NOTHING;");

    // Seed Transaction
    $pdo->exec("INSERT INTO transaction (type, montant, compte_id) VALUES
        ('Depot', 5000.00, 1),
        ('Retrait', 2000.00, 2),
        ('Paiement', 1000.00, 1)
        ON CONFLICT DO NOTHING;");

    echo "Seeders exécutés avec succès !\n";
} catch (Exception $e) {
    echo "Erreur lors du seeding : " . $e->getMessage() . "\n";
}
