<?php
class ProdutoModel{
    //Encapsulando metodos DAO & Regras de Negocios

    public function insertModel(ProdutoVO $value){
        $dao = new ProdutoDAO();
        //regras de negócios
        if($value->getPreco() == "0"){
            $value->SetPreco("10.90");
        }

        return $dao->insert($value);
    }

    public function deleteModel(ProdutoVO $value){
        $dao = new ProdutoDAO();
        return $dao->delete($value);
    }

    public function updateModel(ProdutoVO $value){
        //regra de negócios, onde tiver , troco por . (padrao do mysql) e removo o R$ 
        $value->setPreco(number_format(str_replace("R$ ","",$value->getPreco()), 2, '.', ','));
        $dao = new ProdutoDAO();
        return $dao->update($value);
    }

    public function getByIdModel($id){
        $dao = new ProdutoDAO();
        $prodDAO = $dao->getById($id);
        //regras de negócios
        $prodDAO->setPreco("R$ ".number_format($prodDAO->getPreco(), 2, ',', '.'));

        return $prodDAO;
    }

    public function getAllModel(){
        $dao = new ProdutoDAO();
        return $dao->getAll();
    }
}
?>