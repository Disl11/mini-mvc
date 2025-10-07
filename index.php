<?php
require_once 'model/User.php';
require_once 'Db.php';
require_once 'model/dao/UserDao.php';
require_once 'model/dao/ProductDao.php';


$pdo = Db::getConnexion();
$userDao = new UserDao($pdo);

$productDao = new ProductDao($pdo);

// var_dump($_GET);

$page = $_GET['page'] ?? "product";
$action = $_GET['action'] ?? "list";


switch ($page) {
    case 'user':
        require 'controller/UserController.php';
        $userController1 = new UserController($userDao);

        switch ($action) {
            case 'displayAllUsers':
                $userController1->displayAllUsers();
                break;
        }

        break;

    case 'product':
        require 'controller/ProductController.php';
        $productController = new ProductController($productDao);

        switch ($action) {
            case 'detail':

                $productController->displayProductDetails();

                break;
            case 'list':

                $productController->displayAllProduct();

                break;

            case 'deleteProduct':
                $productController->deleteProduct();

                break;

            case 'addProduct':
                $productController->addProduct();

                break;

            default:
                echo "action pas connue !";
                break;
        }
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
