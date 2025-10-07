<?php

class Product
{

    public $title;
    public int $price;
    public int $id;
    public $description;

    public function __construct(string $title, int $price, int $id, $description)
    {
        $this->title = $title;
        $this->price = $price;
        $this->id = $id;
        $this->description = $description;
    }
}
