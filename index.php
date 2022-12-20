<?php


define('BASEPATH', '/index.php');
require_once(__DIR__ . './routers/router.php');
require_once(__DIR__ . './controllers/Home.controller.php');

App\Router::get(BASEPATH . '/', [Controller\HomeController::class, 'Index']);
App\Router::get(BASEPATH . '/getUsers', [Controller\HomeController::class, 'getUsers']);
App\Router::post(BASEPATH . '/r', function () {
    print_r($_POST);
});

echo (App\Router::handle($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']));

?>