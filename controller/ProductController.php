<?php

require 'model/Product.php';

class ProductController
{


    public $productDao;

    public function __construct($productDao)
    {
        $this->productDao = $productDao;
    }

    public function displayProductDetails()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $product = $this->productDao->getProductById($id);
        }

        require __DIR__ . '/../view/detailProductView.php';
    }

    public function displayAllProduct()
    {

        $products = $this->productDao->getAllProduct();
        require __DIR__ . '/../view/productView.php';
    }
}
