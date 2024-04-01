<?php
class ProdutoDAO{
    public function insert(ProdutoVO $value){
        $SQL = "INSERT INTO `produtos` (`nome`, `marca`, `preco`) VALUES(?, ?, ?)";
        $DB = new DB();

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
}



?>