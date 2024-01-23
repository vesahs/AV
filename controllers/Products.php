<?php
require'../models/ProductsModel.php';
class ProductsController
{
    
    public $productsInstance;
    public $products;
    public function __construct()
    {
        $this->productsInstance = new Products();
    }

    public function getAll()
    {
        return $this->productsInstance->fetchAll();
    }   
}

require './views/produktet-moisturizers.php'

?>