<?php

include ("Model/ProdutoModel.php");
include ("Model/ProdutoVO.php");
include ("Model/ProdutoDAO.php");
include ("Model/DB.php");

class ProdutoController{
    public function ProdutoController(){

    }

    public function salvar(){
        $model = new ProdutoModel();
        $vo = new ProdutoVO();
        $vo->SetNome($_POST["txtNome"]);
        $vo->setMarca($_POST["txtMarca"]);
        $vo->setPreco($_POST["txtPreco"]);

        if($model->insertModel($vo)){
            $_SESSION["msg"] = "Produto Cadastrado com Sucesso!";
        }
        else{
            $_SESSION["msg"] = "Erro ao cadastrar o produto.";
        }

        header("Location: View/produtos/retorno.php");
        //header("Location: ../View/produtos/retorno.php");
    }

    public function update(){
        $model = new ProdutoModel();
        $vo = new ProdutoVO();
        $vo->setId($_POST["txtId"]);
        $vo->setNome($_POST["txtNome"]);
        $vo->setMarca($_POST["txtMarca"]);
        $vo->setPreco($_POST["txtPreco"]);

        if($model->updateModel($vo)){
            $_SESSION["msg"] = "Produto atualizado com sucesso.";
        }
        else{
            $_SESSION["msg"] = "Erro ao atualizar o produto.";
        }

        header("Location: View/produtos/retorno.php");
    }

    public function novo(){
        include("View/produtos/insert.php");
        //header("Location: View/produtos/insert.php");
        //header("Location: ../View/produtos/insert.php");
    }

    public function editar(){
        $model = new ProdutoModel();
        $vo = $model->getByIdModel($_GET["id"]);

        $_SESSION["id"] = $vo->getId();
        $_SESSION["nome"] = $vo->getNome();
        $_SESSION["marca"] = $vo->getMarca();
        $_SESSION["preco"] = $vo->getPreco();

        header("Location: View/produtos/insert.php");
    }

    public function listar(){
        $model = new ProdutoModel();
        $vo = $model->getAllModel();

        $_SESSION["id"] = $vo->getId();
        $_SESSION["nome"] = $vo->getNome();
        $_SESSION["marca"] = $vo->getMarca();
        $_SESSION["preco"] = $vo->getPreco();

        header("Location: View/produtos/list.php");
    }
}
?>