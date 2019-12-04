<?php

class DB{

    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $db_name = "test_login";
    public $conn;

    function __construct(){
        $this->conn =  mysqli_connect($this->host, $this->username, $this->password,$this->db_name);
        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error().''.__LINE__);
        }else{
            // echo "data base connected";
        }
    }
    public function select($data){
        $result = $this->conn->query($data) or die();
        if ($result->num_rows > 0) {
            return $result;
        }else{
            return false;
        }
    }
    public function inserted($data){
        
        $result = $this->conn->query($data);
        if ($result) {
            echo 'data submitted';
        }
    }
    public function editData($edit){
        $result = $this->conn->query($edit);
        if ($result) {
            return $result;
        }else{
            return false;
        }
    }
}

// $db= new DB();