<?php



use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();
require_once __DIR__.'/../../routes/route.web.php';