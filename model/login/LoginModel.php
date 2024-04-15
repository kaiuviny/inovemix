<?php
    class LoginModel{
        public function getLoginModel(LoginVO $value){
            $dao = new LoginDAO();
            return $dao->login($value);
        }
    }
?>