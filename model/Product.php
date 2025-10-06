<?php

class Product
{

    public $title;
    public int $price;
    public int $id;

    public function __construct(string $title, int $price, int $id)
    {
        $this->title = $title;
        $this->price = $price;
        $this->id = $id;
    }
}
