<?php
include "iLoginDAO";
class LoginDAO implements iLoginDAO{

    public function login(LoginVO $value){
        $sql = "SELECT * FROM `login` WHERE `login` = ? AND `password` = ?";

        $id_login = $value->getId_login();
        $login    = $value->getLogin();
        $password = $value->getPassword();
        $employee_id = $value->getEmployee_id();

        $db = new DB();
        $db->getConnection();

        $pstm = $db->execReader($sql);
        $pstm->bind_param("ss", $login, $password);

        $vo = new LoginVO;

        while($rs = $pstm->fetch_array(MYSQLI_ASSOC)){
            $vo->setId_login($rs["id_produto"]);
        }
        return $vo;


    }

    public function requestRegister(LoginVO $value){

    }

    public function forgotPassword(LoginVO $value){

    }

    public function requestSupport(LoginVO $value){

    }
}
?>