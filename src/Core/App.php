<?php

namespace App\Core;

class App
{
    public static function run(): void
    {
        $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ?? '/';

        $routes = [
            "/" => [\App\Controller\HomeController::class, 'index'],
            "/contact" => [\App\Controller\ContactController::class, 'contact'],
            "/product/new" => [\App\Controller\ProductController::class, 'new'],
            "/product/{id}/edit" => [\App\Controller\ProductController::class, 'edit'],
            "/product/{slug}/{id}" => [\App\Controller\ProductController::class, 'show'],
            "/product/{id}/delete" => [\App\Controller\ProductController::class, 'delete']
        ];

        if (isset ($routes[$path])) {

            [$controllerClass, $methodName] = $routes[$path];

            (new $controllerClass())->$methodName();
            return;
        }

        foreach ($routes ?? [] as $route => $target) {
            $pattern = preg_replace('#\{[^/]+\}#', '([^/]+)', $route);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $path, $matches)) {
                array_shift($matches); // retire l'URL complète

                [$controllerClass, $action] = $target;

                (new $controllerClass())->$action(...$matches);
                return;
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}
