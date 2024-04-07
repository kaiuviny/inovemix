<?php
session_start();

include_once ("model/produtos/ProdutoModel.php");
include_once ("model/produtos/ProdutoVO.php");
include_once ("model/produtos/ProdutoDAO.php");
include_once ("model/DB.php");

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

        include("view/produtos/retorno.php");
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

        include("view/produtos/retorno.php");
    }

    public function novo(){
        include("view/produtos/insert.php");
        //include("Location: ../View/produtos/insert.php");
    }

    public function editar(){
        $model = new ProdutoModel();
        $vo = $model->getByIdModel($_GET["id"]);

        $_SESSION["id"] = $vo->getId();
        $_SESSION["nome"] = $vo->getNome();
        $_SESSION["marca"] = $vo->getMarca();
        $_SESSION["preco"] = $vo->getPreco();

        include("view/produtos/edit.php");
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