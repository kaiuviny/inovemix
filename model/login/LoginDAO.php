<?php
include "iLoginDAO.php";
class LoginDAO implements iLoginDAO{

    public function login(LoginVO $value){
        

        $login    = $value->getLogin();
        $password = $value->getPassword();

        //$sql = "SELECT * FROM `login` WHERE `login` = '$login' AND `password` = '$password';";
        $sql = "SELECT 
                    `id_login`, `login`, `password`, `employee_id`, `job_id`
                FROM
                    mvc.login AS l
                INNER JOIN
                    employee AS e ON l.employee_id = e.id_employee
                WHERE `login` = ? AND `password` = ?;";

        $db = new DB();
        $db->getConnection();

        $pstm = $db->execSQL($sql);
        $pstm->bind_param("ss", $login, $password);
        $pstm->execute();

        if($result = $pstm->get_result()){
           // echo "<h1> Num rows: ".$result->num_rows."</h1>";
           if($result->num_rows>0){
                $vo = new LoginVO;
                $rs = $result->fetch_array(MYSQLI_ASSOC);
                $vo->setJob_id($rs["job_id"]);
                return $rs["job_id"];
                /*while($rs = $result->fetch_array(MYSQLI_ASSOC)){
                    $vo->setId_login($rs["id_login"]);
                    $vo->setLogin($rs["login"]);
                    $vo->setPassword($rs["password"]);
                    $vo->setEmployee_id($rs["employee_id"]);
                    $vo->setJob_id($rs["job_id"]);
                }
                return $vo;*/
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