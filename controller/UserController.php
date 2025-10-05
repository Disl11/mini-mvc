<?php

require 'model/User.php';

class UserController
{

    public function index()
    {
        $user = new User("Brian");

        require __DIR__ . '/../view/userView.php';
    }
}
