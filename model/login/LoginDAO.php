<?php
include "iLoginDAO.php";
class LoginDAO implements iLoginDAO{

    public function login(LoginVO $value){
        

        $login    = $value->getLogin();
        $password = $value->getPassword();

        //$sql = "SELECT * FROM `login` WHERE `login` = '$login' AND `password` = '$password';";
        $sql = "SELECT * FROM `login` WHERE `login` = ? AND `password` = ?;";

        $db = new DB();
        $db->getConnection();

        $pstm = $db->execSQL($sql);
        $pstm->bind_param("ss", $login, $password);
        $pstm->execute();

        if($result = $pstm->get_result()){
           // echo "<h1> Num rows: ".$result->num_rows."</h1>";
           if($result->num_rows>0){
            $vo = new LoginVO;
            while($rs = $result->fetch_array(MYSQLI_ASSOC)){
                $vo->setId_login($rs["id_login"]);
                $vo->setId_login($rs["login"]);
                $vo->setId_login($rs["password"]);
                $vo->setId_login($rs["employee_id"]);
            }
            return $vo;
           }
           else{
            return false;
           }
        }
        else{
            return false;
        }
        

       

    }

    public function requestRegister(LoginVO $value){
        //
    }

    public function forgotPassword(LoginVO $value){
        //
    }

    public function requestSupport(LoginVO $value){
        //
    }
}
?>