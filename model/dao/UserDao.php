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

    public function deleteUser($id)
    {
        try {
            $query = "DELETE FROM users WHERE id = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([':id' => $id]);
        } catch (\PDOException $e) {
            error_log("erreur requette delete user " . $e->getMessage());
            return false;
        }
    }

    public function insertUser(string $name)
    {

        try {
            $query = "INSERT INTO users (name) VALUES(:name)";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([
                ':name' => $name
            ]);
        } catch (\PDOException $e) {
            error_log("erreur requette l'or de l'insertion" . $e->getMessage());
            return false;
        }
    }

    public function updateUser(int $id, string $name)
    {
        try {
            $query = "UPDATE users SET name = :name WHERE id = :id ";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([
                ':name' => $name,
                ':id' => $id,
            ]);
        } catch (\PDOException $e) {
            error_log("erreur requette update" . $e->getMessage());
            return false;
        }
    }
}
