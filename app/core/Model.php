<?php

class Model
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=car_rental', 'root', 'Student!@2024');
    }
}
