<?php
    session_start();

    class LoginController{
        public function LoginController(){}

        public function logar(){

            $_SESSION["login"] = $_POST["txtLogin"];
            $_SESSION["password"] = $_POST["txtPassword"];
            //if($model->getLoginModel($vo)){ 
                //$_SESSION["msg"] = "Logado com Sucesso...";
                //include ("view/frenteCaixa");
            //else{
            $_SESSION["msg"] = "Logando! Aguarde...";
            include ("view/Login/LoginRetorno.php");
            //}
        }

        public function esqueciaSenha(){

            $_SESSION["msg"] = "E-mail enviado ao Gestor para cadastro! Aguarde...";
        }

        public function solicitarCadastro(){

            $_SESSION["msg"] = "E-mail enviado ao Gestor para cadastro! Aguarde...";
        }

        public function solicitarSuporte(){

            $_SESSION["msg"] = "E-mail enviado ao Gestor para cadastro! Aguarde...";
        }

    }
?>