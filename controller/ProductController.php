<?php

require 'model/Product.php';

class ProductController
{


    public function indexProduct()
    {

        require __DIR__ . '/../view/productView.php';
    }

    public function listProduct()
    {
        require __DIR__ . '/../view/productView.php';
    }
}
