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

    public function getUserById($id)
    {
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id' => $id]);
        $dataUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($dataUser) {
            return new User($dataUser["name"], $dataUser["id"]);
        }
        return null;
    }
}
