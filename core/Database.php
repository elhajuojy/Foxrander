<?php

namespace core;

use core\Model;
use PDO;
use PDOException;

class Database
{

    public  $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        // dd($dsn);
        try {
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {

            echo "=>" . $e;
            die();
        }
    }

    public function query($query, $params = []): Database
    {

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }


}