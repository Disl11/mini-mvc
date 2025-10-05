<?php

require 'model/Product.php';

class ProductController
{

    public function indexProduct()
    {
        $product = new Product("Shoes", 99);

        require __DIR__ . '/../view/productView.php';
    }

    public function listProduct()
    {
        $products = [
            new Product("t-shirt", 30),
            new Product("pentalon", 49),
            new Product("slip", 8)
        ];

        require __DIR__ . '/../view/productView.php';
    }
}
