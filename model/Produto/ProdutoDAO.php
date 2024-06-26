<?php
include "iProdutoDAO.php";
class ProdutoDAO implements iProdutoDAO{
    
    public function insert(ProdutoVO $value) {
        $SQL = "INSERT INTO `produtos` (`nome`, `marca`, `preco`) VALUES (?, ?, ?)";

        $nome = $value->getNome();
        $marca = $value->getMarca();
        $preco = $value->getPreco();

        $DB  = new DB();
        $DB->getConnection();

        $pstm = $DB->execSQL($SQL);
        $pstm->bind_param("sss", $nome, $marca, $preco);
        
        if ($pstm->execute())
            return true;
        else
            return false;

    }

    public function update(ProdutoVO $value) {
        $SQL = "UPDATE `produtos` SET `nome` = ?, `marca` = ?, `preco` = ? WHERE `id_produto` = ?";

        $id     = $value->getId();
        $nome   = $value->getNome();
        $marca  = $value->getMarca();
        $preco  = $value->getPreco();

        $DB  = new DB();
        $DB->getConnection();
        
        $pstm = $DB->execSQL($SQL);
        $pstm->bind_param("sssi", $nome, $marca, $preco, $id);

        if ($pstm->execute())
            return true;
        else
            return false;
    }

    public function delete(ProdutoVO $value){
        $SQL = "DELETE FROM `produtos` WHERE `id_produto` = ?";
        $id_produto = $value->getId();

        $DB  = new DB();
        $DB->getConnection();

        $pstm = $DB->execSQL($SQL);
        $pstm->bind_param("i", $id_produto);

        if($pstm->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function getById($id){
        $SQL = "SELECT * FROM `produtos` WHERE `id_produto` = ". addslashes($id);

        $DB = new DB();
        $DB->getConnection();
        $query = $DB->execReader($SQL);

        $vo = new ProdutoVO();

        while($rs = $query->fetch_array(MYSQLI_ASSOC)){
            $vo->setId($rs["id_produto"]);
            $vo->setNome($rs["nome"]);
            $vo->setMarca($rs["marca"]);
            $vo->setPreco($rs["preco"]);
        }

        return $vo;
    }

    public function getAll(){
        $DB = new DB();
        $DB->getConnection();
        $query = $DB->execReader("SELECT * FROM `produtos`;");
        $array = array();
        while($rs = $query->fetch_array()){
            $array[] = array($rs["id_produto"], $rs["nome"], $rs["marca"], "R$ ".number_format($rs["preco"], 2, ',', '.'), $rs["datetime_create"], $rs["user_update"], $rs["last_update"]);
        }
        return $array;
    }
}



?>