<?php




$page = isset($_GET['page']) ? $_GET['page'] : null;


switch ($page) {
    case 'user':
        require 'controller/UserController.php';
        $userController1 = new UserController();
        $userController1->index();
        break;

    case 'product':
        require 'controller/ProductController.php';
        $productController2 = new ProductController();
        $productController2->indexProduct();
        break;

    default:

        echo "<h1> cette page est inconnue ! </h1>";
        break;
}
