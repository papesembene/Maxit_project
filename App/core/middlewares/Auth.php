<?php
namespace App\Core\Middlewares;
use App\Core\Session;
use App\Core\App;

class Auth
{
    public function __invoke()
    {
        try {
            $session = App::getDependencie('session');
            
            if (!$session->get('user')) {
              
                header('Location: /');
                exit;
            }

            return true;
        } catch (\Exception $e) {
          
            header('Location: /');
            exit;
        }
    }
}
