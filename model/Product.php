<?php

class Product
{

    private $title;
    private int $price;

    public function __construct(string $title, int $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getTitle()
    {

        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
