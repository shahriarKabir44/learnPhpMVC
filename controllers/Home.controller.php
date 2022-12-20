<?php

namespace Controller;


require_once(__DIR__ . '../../views/View.php');
require_once(__DIR__ . '../../models/User.model.php');
require_once(__DIR__ . '../../dbconnection.php');
use DbConnection;
use Models;

use View;

class HomeController
{

    public static function Index()
    {
        return (new View\View('Home', ['a' => "ewwe"]))->render();
    }
    public static function Form()
    {
        $data = ["name" => "poop"];
        return \json_encode($data);
    }
    public static function getUsers()
    {

        $data = \Models\User::findById(1);
        return \json_encode($data);
    }
}

?>