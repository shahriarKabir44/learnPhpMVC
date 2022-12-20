<?php

namespace App;


class Router
{
    private static $routes = [];
    public static function registerRoute(string $requestType, string $path, callable |array $action)
    {
        Router::$routes[$requestType][$path] = $action;

    }
    public static function get($path, callable |array $action)
    {
        Router::registerRoute('GET', $path, $action);
    }
    public static function post($path, callable |array $action)
    {
        Router::registerRoute('POST', $path, $action);
    }
    public static function handle(string $requestType, string $path, array $reqParams, array $reqBody)
    {

        $path = explode('?', $path)[0];
        return Router::$routes[$requestType][$path]($reqParams, $reqBody);
    }
}

?>