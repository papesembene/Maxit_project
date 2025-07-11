<?php
namespace App\Core\Middlewares;



class Auth
{
    
    public static function isAuthenticated(): bool
    {
        return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
    }

 public function __invoke()
 {
        if (!self::isAuthenticated()) {
            header('Location: /');
            exit;
        }
    }

    
}