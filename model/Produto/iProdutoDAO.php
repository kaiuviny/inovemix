<?php
interface iProdutoDAO{
    public function insert(ProdutoVO $value);
    public function update(ProdutoVO $value);
    public function delete(ProdutoVO $value);
    public function getById($id);
    public function getAll();
}
?>