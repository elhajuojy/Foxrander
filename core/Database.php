<?php
namespace core;

use PDO;
use PDOException;

class Database
{
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        try{
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        
        }catch(PDOException $e){
            
            echo "=>".$e;
            die();
            
        }
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public  function  find(){
        return $this->statement->fetchAll();
    }
    public  function findOrFail(){

        $result = $this->find();

        if(! $result){
            //do something
            Router::abort();
            
        }
        return $result;
    }
}