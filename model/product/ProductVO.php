<?php
class ProductVO{
    private $id_product;
    private $product_name;
    private $product_description;
    private $product_image;
    private $product_price;
    private $product_quantity;
    private $product_barcode;
    private $expirate_date;

    public function getId_product(){
        return $this->id_product;
    }
    public function setId_product($id_product){
        $this->id_product = $id_product;
    }

    public function getProduct_name(){
        return $this->product_name;
    }
    public function setProduct_name($product_name){
        $this->product_name = $product_name;
    }

    public function getproduct_description(){
        return $this->product_description;
    }
    public function setproduct_description($product_description){
        $this->product_description = $product_description;
    }

    public function getproduct_image(){
        return $this->product_image;
    }
    public function setproduct_image($product_image){
        $this->product_image = $product_image;
    }

    public function getproduct_price(){
        return $this->product_price;
    }
    public function setproduct_price($product_price){
        $this->product_price = $product_price;
    }

    public function getproduct_quantity(){
        return $this->product_quantity;
    }
    public function setproduct_quantity($product_quantity){
        $this->product_quantity = $product_quantity;
    }

    public function getproduct_barcode(){
        return $this->product_barcode;
    }
    public function setproduct_barcode($product_barcode){
        $this->product_barcode = $product_barcode;
    }

    public function getexpirate_date(){
        return $this->expirate_date;
    }
    public function setexpirate_date($expirate_date){
        $this->expirate_date = $expirate_date;
    }
}
?>