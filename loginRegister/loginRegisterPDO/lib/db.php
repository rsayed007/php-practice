<?php
class DataBase{

    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $db_name = "test_login";
    public $pdo;

    public function __construct(){
        if(!isset($this->pdo)){
            try {
                $conn = new PDO("mysql:host=".$this->host."; dbname=".$this->db_name, $this->username);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->exec("SET CHARACTER SET utf8");
                $this->pdo = $conn;
                echo "Connected successfully";
            }
            catch(PDOException $e){
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }
}
