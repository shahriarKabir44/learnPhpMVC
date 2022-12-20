<?php


namespace Models;

require_once(__DIR__ . '../../dbconnection.php');
use DbConnection;

class User
{
    public static function findById($Id)
    {
        $sql = "select * from user where Id=?";
        return \DbConnection\DbConnection::selectQuery($sql, [$Id]);
    }
}
?>