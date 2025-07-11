<?php

namespace App\config;
use App\Core\Middlewares\Auth;

$middlewares = [
    "auth" => Auth::class
];

return $middlewares;