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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $this->userDao->insertUser($name);

            header('Location: index.php?page=user&action=displayAllUsers');
            exit;
        }
    }

    public function updateUser()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {





            $this->userDao->updateUser();

            header('Location: index.php?page=user&action=displayAllUsers');
            exit;
        }
    }
}
