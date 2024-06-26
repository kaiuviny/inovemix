<?php

    session_start();

    include_once ("model/DB.php");
    include_once ("model/Produto/ProdutoVO.php");
    include_once ("model/Produto/ProdutoDAO.php");
    include_once ("model/Produto/ProdutoModel.php");

    class ProdutoController{
        public function ProdutoController(){}

        public function salvar(){
            
            $model = new ProdutoModel();
            $vo = new ProdutoVO();
            $vo->SetNome($_POST["txtNome"]);
            $vo->setMarca($_POST["txtMarca"]);
            $vo->setPreco($_POST["txtPreco"]);

            $_SESSION["nome"] = $vo->getNome();
            $_SESSION["marca"] = $vo->getMarca();
            $_SESSION["preco"] = $vo->getPreco();

            if($model->insertModel($vo)){
                $_SESSION["msg"] = "Produto Cadastrado com Sucesso!";
            }
            else{
                $_SESSION["msg"] = "Erro ao cadastrar o produto.";
            }

            include("view/Produto/retorno.php");
            //header("Location: View/produtos/retorno.php");
        }

        public function atualizar(){
            $model = new ProdutoModel();
            $vo = new ProdutoVO();
            $vo->setId($_POST["txtId"]);
            $vo->setNome($_POST["txtNome"]);
            $vo->setMarca($_POST["txtMarca"]);
            $vo->setPreco($_POST["txtPreco"]);

            $_SESSION["id"] = $vo->getId();
            $_SESSION["nome"] = $vo->getNome();
            $_SESSION["marca"] = $vo->getMarca();
            $_SESSION["preco"] = $vo->getPreco();

            if($model->updateModel($vo)){
                $_SESSION["msg"] = "Produto atualizado com sucesso.";
            }
            else{
                $_SESSION["msg"] = "Erro ao atualizar o produto.";
            }

            include("view/Produto/retorno.php");
        }

        public function novo(){
            include("view/Produto/insert.php");
            //include("Location: ../View/Produto/insert.php");
        }

        public function editar(){
            $model = new ProdutoModel();
            $vo = $model->getByIdModel($_GET["id"]);

            $_SESSION["id"] = $vo->getId();
            $_SESSION["nome"] = $vo->getNome();
            $_SESSION["marca"] = $vo->getMarca();
            $_SESSION["preco"] = $vo->getPreco();

            include("view/Produto/edit.php");
        }

        public function deletar(){
            $model = new ProdutoModel();
            $vo = $model->getByIdModel($_GET["id"]);

            if($model->deleteModel($vo)){
                $_SESSION["msg"] = "Produto n.".$vo->getId()." - [".$vo->getNome()."] deletado com sucesso!";
                header("Location: ?Controller=produto&Action=listar");
            }
            else{
                $_SESSION["msg"] = "Nao foi possivel deletar o Produto n.".$vo->getId()." [".$vo->getNome()."]. Tente novamente!";
                header("Location: ?Controller=produto&Action=listar");
            }

            
        }

       // public function getAll(){
        public function listar(){
            $model = new ProdutoModel();
            $_SESSION["data"] = $model->getAllModel();
            include ("View/Produto/list.php");
        }
    }
?>