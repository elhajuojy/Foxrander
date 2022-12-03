<?php
class DB
{
    private $conn;
    private string $HOST = '';
    private string $DB = '';
    private string $USER = '';
    private string $PASS = '';
    private int $PORT = 3306;

    public function __construct($driver)
    {
        $this->conn = new PDO("{$driver}:host={$this->HOST}:dbname={$this->DB}", $this->USER, $this->PASS);
    }


    public function getConnection()
    {
        return $this->conn;
    }


    public function close()
    {
        $this->conn = null;
    }
}
