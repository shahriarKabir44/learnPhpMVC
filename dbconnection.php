<?php

namespace DbConnection;

class DbConnection
{

    private static $connection = null;
    private static bool $isInitialized = false;
    private static function initConnection()
    {
        $dbHost = 'localhost';
        $dbName = 'users';
        $dbUser = 'root';
        $dbPassword = 'root';
        if (!DbConnection::$isInitialized) {
            DbConnection::$connection = new \PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
            DbConnection::$isInitialized = false;
        }
    }
    private static function getConnection()
    {
        DbConnection::initConnection();
        return DbConnection::$connection;
    }
    public static function selectQuery($sql, $values)
    {
        DbConnection::initConnection();
        $statement = DbConnection::$connection->prepare($sql);
        $statement->execute($values);
        return $statement->fetchAll();
    }
    public static function insertOrUpdate(string $sql, array $values)
    {
        DbConnection::initConnection();

        try {
            DbConnection::$connection->beginTransaction();
            $statement = DbConnection::$connection->prepare($sql);
            $statement->execute($values);
        } catch (\Throwable $th) {
            if (DbConnection::$connection->inTransaction()) {
                DbConnection::$connection->rollBack();
            }
        }

    }
}
?>