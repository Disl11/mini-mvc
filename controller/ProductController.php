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

            require __DIR__ . '/../view/detailProductView.php';
        }
    }

    public function displayAllProduct()
    {
        $products = $this->productDao->getAllProduct();
        require __DIR__ . '/../view/productView.php';
    }

    public function deleteProduct()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $this->productDao->deleteProduct($id);
        }

        header('Location: index.php?page=product&action=list');
        exit;

        // $this->displayAllProduct(); // rafficher la list pas bessoin de requiere 
    }

    public function addProduct()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $price = $_POST['price'];
            $description = $_POST['description'];

            $this->productDao->insertProduct($title, $price, $description);

            header('Location: index.php?page=product&action=list');
            exit;
        } else {
            require __DIR__ . '/../view/productView.php';
        }
    }

    public function updateProduct()
    {
        if (isset($_POST['updateProduct'])) {
            $id = (int)$_POST['updateProduct'];

            $product = $this->productDao->getProductById($id); //on récuperer l'id de l'utilisateur 

            require __DIR__ . '/../view/productUpdateView.php';
        }
    }

    public function saveProduct()
    {

        if (isset($_POST['saveProduct'])) {
            $id = (int)$_POST['id'];
            $title = (string)$_POST['title'];
            $price = (int)$_POST['price'];
            $description = (string)$_POST['description'];


            $this->productDao->updateProduct($id, $title, $price, $description);

            header('Location: index.php?page=product&action=list');

            exit;
        }
    }
}
