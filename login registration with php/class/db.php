<?php

class DB{

    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $db_name = "test_login";
    public $conn;

    function __construct(){
        $this->conn = mysqli_connect($this->host, $this->username, $this->password,$this->db_name);
        // $conn = new mysqli($host, $username, $password,$db_name);

        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }else{
            echo "data base connected";
        }
    }
}

// $db= new DB();