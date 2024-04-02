<?php
class DB{

    private $conn;

    public function getConnection() {
        return new mysqli("localhost", "root", "", "mvc");
    }

    public function execReader($SQL){
        return $this->conn->query($SQL);
    }

    public function execSQL($SQL){
        return $this->conn->prepare($SQL);
    }

    public function __destruct(){
        $this->conn->close();
    }
}
?>