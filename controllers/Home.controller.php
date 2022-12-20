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

    public static function Index($reqParams = null, $reqBody = null)
    {
        return (new View\View('Home', ['a' => "ewwe"]))->render();
    }
    public static function Form($reqParams = null, $reqBody = null)
    {
        $data = ["name" => "poop"];
        return \json_encode($data);
    }
    public static function getUsers($reqParams = null, $reqBody = null)
    {

        $data = \Models\User::findById($reqParams['Id']);
        return \json_encode($data);
    }
}

?>