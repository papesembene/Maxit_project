<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../App/config/bootstrap.php';
use App\Core\Router;
 Router::resolve($routes);