
<?php
return [
    '/' => [
        'controller' => App\Controllers\SecurityController::class,
        'method' => 'login',
        'middlewares' => [],
        'methods' => ['GET', 'POST'],
    ],
    'client/dashboard' => [
        'controller' => App\Controllers\UserController::class,
        'method' => 'index',
        'middlewares' => ['auth'],
        'methods' => ['GET'],
    ],
    'user/transactions/' => [
        'controller' => App\Controllers\UserController::class,
        'method' => 'transactions',
        'middlewares' => ['auth'],
        'methods' => ['GET'],
    ],
    'logout' => [
        'controller' => App\Controllers\SecurityController::class,
        'method' => 'logout',
        'middlewares' => ['auth'],
        'methods' => ['GET'],
    ],
    'register' => [
        'controller' => App\Controllers\SecurityController::class,
        'method' => 'register',
        'middlewares' => ['crypt_password'],
        'methods' => ['GET', 'POST'],
    ],
    '/client/acountsList'=> [
        'controller' => App\Controllers\UserController::class,
        'method' => 'acountsList',
        'middlewares' => ['auth'],
        'methods' => ['GET'],
    ],
    '/client/create-account'=> [
        'controller' => App\Controllers\UserController::class,
        'method' => 'createSecondaryAccount',
        'middlewares' => ['auth'],
        'methods' => ['GET', 'POST'],
        
    ],
];
