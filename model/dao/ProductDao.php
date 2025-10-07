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
            $productObj = new Product($product['title'], $product['price'], $product['id'], $product['Description']);
            $products[] = $productObj;
        }
        return $products;
    }

    public function getProductById($id)
    {
        $query = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($data) {
            return new Product($data['title'], $data['price'], $data['id'], $data['Description']);
        }
        return null;
    }
}
