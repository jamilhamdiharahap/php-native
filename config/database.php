<?php
class Database
{
    private $server = "localhost",
        $user = "root",
        $password = "",
        $database = "jasapengiriman",
        $conn;


    public function __construct()
    {
        $this->conn =  mysqli_connect($this->server, $this->user, $this->password, $this->database);
    }

    public function connect()
    {
        return $this->conn;
    }
}
