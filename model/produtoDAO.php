<?php
class ProdutoDAO{
    public function insert(ProdutoVO $value) {
        $SQL = "INSERT INTO `produtos` (`nome`, `marca`, `preco`) VALUES(?, ?, ?)";
        $DB  = new DB();

        $DB->getConnection();
        $pstm = $DB->execSQL($SQL);

        $pstm->bind_param("s", $value->getNome());
        $pstm->bind_param("s", $value->getMarca());
        $pstm->bind_Param("s", $value->getPreco());

        if ($pstm->execute())
            return true;
        else
            return false;

    }

    public function update(ProdutoVO $value) {
        $SQL = "UPDATE `produtos` SET `nome` = ?, `marca` = ?, `preco` = ? WHERE `id` = ?";
        $DB  = new DB();

        $DB->getConnection();
        $pstm = $DB->execSQL($SQL);

        $pstm->bind_param("s", $value->getNome());
        $pstm->bind_param("s", $value->getMarca());
        $pstm->bind_param("s", $value->getPreco());
        $pstm->bind_param("i", $value->getId());

        if ($pstm->execute())
            return true;
        else
            return false;
    }

    public function delete(ProdutoVO $value){
        $SQL = "DELETE FROM `produtos` WHERE `id` = ?";
        $DB  = new DB();

        $DB->getConnection();
        $pstm = $DB->execSQL($SQL);

        $pstm->bind_param("i", $value->getId());
    }

    public function getById($id){
        $SQL = "SELECT * FROM `produtos` WHERE  `id` = ". addslashes($id);

        $DB = new DB();
        $DB->getConnection();
        $query = $DB->execReader($SQL);

        $vo = new ProdutoVO();

        while($rs = $query->fetch_array(MYSQLI_ASSOC)){
            $vo->setId($rs["id"]);
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
        return $query;
        /*$vo = new ProdutoVO();

        while($rs = $query->fetch_object(MYSQLI_ASSOC)){
            $vo->setId($rs->id);
            $vo->setNome($rs->nome);
            $vo->setMarca($rs->marca);
            $vo->setPreco($rs->preco);
        }

        return $vo;*/
    }
}



?>