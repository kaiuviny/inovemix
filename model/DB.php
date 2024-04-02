<?php
class DB{

    private $conn;

    public function getConnection() {
        $this->conn =  new mysqli("127.0.0.1", "root", "", "mvc", "33306");
        if($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
        }
        else{
            return $this->conn;
        }
    }

    public function execReader($SQL){
        return $this->conn->query($SQL);
    }

    public function execSQL($SQL){
        return $this->conn->prepare($SQL);
    }

    public function conclose(){
        $this->conn->close();
    }
    /*public function __destruct(){
        $this->conn->close();
    }*/
}
?>