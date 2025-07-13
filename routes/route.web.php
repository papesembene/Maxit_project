<?php

$routes = [
    'register' => [
        'controller' => 'App\Controllers\SecurityController',
        'action' => 'register',
        'middleware' => ['crypt_password'] 
    ],
   
    '' => [
        'controller' => 'App\Controllers\SecurityController',
        'action' => 'login',
    ],
    
    'client/dashboard' => [
        'controller' => 'App\Controllers\UserController',
        'action' => 'index',
        'middleware' => ['auth']
    ],
       'user/transactions' => [
        'controller' => 'App\Controllers\UserController',
        'action' => 'transactions',
        'middleware' => ['auth']
    ]
];

return $routes;
