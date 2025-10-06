<?php

class User
{

    public  $name;
    public  $id;

    public function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
    }
}
