<?php
class LoginVO{
    private $id_login;
    private $login;
    private $password;
    private $employee_id;

    public function getId_login(){
        return $this->id_login;
    }
    public function setId_login($id){
        $this->id_login = $id;
    }

    public function getLogin(){
        return $this->login;
    }
    public function setLogin($login){
        $this->login = $login;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }

    public function getEmployee_id(){
        return $this->employee_id;
    }
    public function setEmployee_id($employee_id){
        $this->employee_id = $employee_id;
    }
 
}
?>