<?php

namespace App\Core;

class Router
{
    public static function resolve(array $routes)
    {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        if (!array_key_exists($uri, $routes)) {
            http_response_code(404);
            echo "404 - Page non trouvée";
            return;
        }

        $route = $routes[$uri];
        $controllerName = $route['controller'];
        $actionName = $route['action'];

       
            if (isset($route['middlewares'])) {
                foreach ($route['middlewares'] as $middleware) {
                    if (function_exists($middleware)) {
                        $middleware();
                    }
                }
            }

        
        if (class_exists($controllerName) && method_exists($controllerName, $actionName)) {
            $controller = new $controllerName();
            $controller->$actionName();
        } else {
            http_response_code(404);
            echo "404 - Page non trouvée";
        }
    }
}

