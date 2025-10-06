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

        var_dump($users);

        require __DIR__ . '/../view/userView.php';
    }
}
