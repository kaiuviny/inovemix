<?php
class ProdutoModel{
    //Encapsulando metodos DAO

    public function insertModel(ProdutoVO $value){
        $prod = new ProdutoDAO();
        if($value->getPreco() == "0"){
            $value->SetPreco("10.90");
        }

        return $prod->insert($value);
    }

    public function deleteModel(ProdutoVO $value){
        $prod = new ProdutoDAO();
        return $prod->delete($value);
    }

    public function updateModel(ProdutoVO $value){
        $prod = new ProdutoDAO();
        return $prod->update($value);
    }

    public function getByIdModel($id){
        $prod = new ProdutoDAO();
        $vo = $prod->getById($id);

        $value = new ProdutoVO;
        $value->setPreco("R$ ". number_format($vo->getPreco(), 2, ',', '.'));

        return $vo;
    }

    public function getAllModel(){
        $prod = new ProdutoDAO();
        return $prod->getAll();
    }
}
?>