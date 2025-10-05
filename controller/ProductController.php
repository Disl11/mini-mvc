<?php

require 'model/Product.php';

class ProductController
{

    public function indexProduct()
    {
        $product = new Product("Shoes", 99);

        require __DIR__ . '/../view/productView.php';
    }
}
