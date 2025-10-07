<?php
require_once 'model/User.php';
require_once 'Db.php';
require_once 'model/dao/UserDao.php';
require_once 'model/dao/ProductDao.php';


$pdo = Db::getConnexion();
$userDao = new UserDao($pdo);

$productDao = new ProductDao($pdo);




$page = isset($_GET['page']) ? $_GET['page'] : null;


switch ($page) {
    case 'user':
        require 'controller/UserController.php';
        $userController1 = new UserController($userDao);
        $userController1->displayAllUsers();
        break;

    case 'product':
        require 'controller/ProductController.php';
        $productController2 = new ProductController($productDao);
        $productController2->displayProductDetails();
        break;

    case 'productList':
        require 'controller/ProductController.php';
        $producList3 = new ProductController($productDao);
        $producList3->displayAllProduct();
        break;



    default:

        echo "<h1> cette page est inconnue ! </h1>";
        break;
}



//+++++++ on crée un objet(instance) pour avoir accée a notre base de donnée ++++++


// stock la requette 
// $query = "SELECT * FROM users WHERE id=2";

//preparation de la reqeutte
// $stmt = $pdo->prepare($query);

//pour execute la raquette prepare       
// $stmt->execute();


//recuperation des donner
// $data = $stmt->fetchAll(PDO::FETCH_ASSOC); // table associatif 
//$data = $stmt->fetchAll(PDO::FETCH_OBJ);

// var_dump($data);
