<?php

class UserDao
{

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM users";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $users = [];
        foreach ($data as $user) {
            $userObj = new User($user["name"], $user["id"]);
            $users[] = $userObj; //equivalent de array push pour push un user dans un tableau;
        }
        return $users;
    }
}
