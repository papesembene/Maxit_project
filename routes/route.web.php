<?php

$routes = [
    'register' => [
        'controller' => 'App\Controllers\SecurityController',
        'action' => 'register',
    ],
   
    '' => [
        'controller' => 'App\Controllers\SecurityController',
        'action' => 'login',
    ],
    'client/dashboard'=>[
        'controller' => 'App\Controllers\UserController',
        'action' => 'index',
       
    ]
    
];
