<?php

class ProductDao
{

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function getAllProduct()
    {

        $query = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $products = [];
        foreach ($data as $product) {
            $productObj = new Product($product['title'], $product['price'], $product['id'], $product['description']);
            $products[] = $productObj;
        }
        return $products;
    }


    //function pour récuper par id dans la base de donner
    public function getProductById($id)
    {
        $query = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            return new Product($data['title'], $data['price'], $data['id'], $data['description']);
        }
        return null;
    }

    public function deleteProduct($id)
    {
        $query = "DELETE FROM products WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id' => $id]);
    }


    public function insertProduct(string $title, int $price, string $description)
    {

        try {
            $query = "INSERT INTO products (title, price, description) VALUES(:title, :price, :description)";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([
                ':title' => $title,
                ':price' => $price,
                ':description' => $description
            ]);
        } catch (\PDOException $e) {
            error_log("erreur requette l'or de l'insertion" . $e->getMessage());
            return false;
        }
    }

    public function updateProduct(int $id, string $title, int $price, string $description)
    {
        try {
            $query = "UPDATE products SET title = :title, price =:price, description =:description  WHERE id = :id ";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([
                ':title' => $title,
                ':price' => $price,
                ':description' => $description,
                ':id' => $id
            ]);
        } catch (\PDOException $e) {
            error_log("erreur requette update product" . $e->getMessage());
            return false;
        }
    }
}
