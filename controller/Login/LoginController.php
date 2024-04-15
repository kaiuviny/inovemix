<?php
    session_start();

    include_once ("model/DB.php");
    include_once ("model/Login/LoginVO.php");
    include_once ("model/Login/LoginDAO.php");
    include_once ("model/Login/LoginModel.php");
    
    class LoginController{
        public function LoginController(){}

        public function logar(){

            $_SESSION["login"] = $_POST["txtLogin"];
            $_SESSION["password"] = $_POST["txtPassword"];

            $vo = new LoginVO();
            $vo->setLogin($_POST["txtLogin"]);
            $vo->setPassword($_POST["txtPassword"]);

           

           $model = new LoginModel();

            if($data = $model->getLoginModel($vo)){ 
                $_SESSION["msg"] = "Logado kaiuviny com Sucesso...";
                $_SESSION["data"] = $data;
                header("Location: ?Controller=produto&Action=listar");
            }
            else{

                $_SESSION["msg"] = "Inválido! Erro ao logar, tente novamente";
                include ("view/Login/LoginRetorno.php");
            }
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