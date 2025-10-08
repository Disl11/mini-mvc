<?php


class UserController
{


    public $userDao;


    public function __construct($userDao)
    {
        $this->userDao = $userDao;
    }


    public function displayAllUsers()
    {
        $users = $this->userDao->getAllUsers();
        require __DIR__ . '/../view/userView.php';
    }

    public function deleteUser()
    {
        if (isset($_POST['deleteUser'])) {
            $id = $_POST['deleteUser'];
            $this->userDao->deleteUser($id);
        }
        header('Location: index.php?page=user&action=displayAllUsers');
        exit;
    }

    public function addUser()
    {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { //server 
            $name = $_POST['name'];
            $this->userDao->insertUser($name);

            header('Location: index.php?page=user&action=displayAllUsers');
            exit;
        }
    }

    public function updateUser()
    {
        if(isset($_POST['updateUser'])){ 
            $id =(int)$_POST['updateUser']; 
            $user = $this->userDao->getUserById($id); //on récuperer l'id de l'utilisateur 

             require __DIR__ . '/../view/userUpdateView.php';
        }
    }


    public function saveUser(){
        if(isset($_POST['saveUser'])){
            $id = $_POST['id'];
            $name = $_POST['name'];

            $this->userDao->updateUser($id, $name);
            
            header('Location: index.php?page=user&action=displayAllUsers');
            exit;
        }
    }

           

        
  
}
