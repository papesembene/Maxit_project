<?php
namespace App\Core;

class App
{
   
    private static array $dependencies = [

        'core'=>[
            DataBase::class,
            Session::class,
            Router::class,
            Validator::class

        
        ],

        'services'=>[
            \App\Services\SecurityService::class,
            \App\Services\SmsService::class,
            \App\Services\TransactionService::class,
         
        ],

        'repositories'=>[
            \App\Repositories\UserRepository::class,
            \App\Repositories\CompteRepository::class,
            \App\Repositories\TransactionRepository::class,
            
            
        ],


    ];
  
    

    public static function getDependencie(string $className)
    {
            foreach (self::$dependencies as $category => $classes) {
                foreach ($classes as $fullClassName) {
                  
                    $shortName = substr($fullClassName, strrpos($fullClassName, '\\') + 1);

                    if ($shortName === $className) {
                        if (!class_exists($fullClassName)) {
                            throw new \Exception("La classe '$fullClassName' n'existe pas.");
                        }

                        if (method_exists($fullClassName, 'getInstance')) {
                            return $fullClassName::getInstance();
                        }

                        return new $fullClassName();
                    }
                }
            }

            throw new \Exception("La classe '$className' n'a pas été trouvée dans les dépendances.");
    }




    

        

}















