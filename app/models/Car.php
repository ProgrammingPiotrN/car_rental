<?php


class Car
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllCars()
    {
        $this->db->query('SELECT * FROM cars');
        return $this->db->resultSet();
    }

    public function createCar($name, $brand, $year, $price, $imagePath)
    {
        $this->db->query('INSERT INTO cars (name, brand, year) VALUES (:name, :brand, :year)');
        $this->db->bind(':name', $name);
        $this->db->bind(':brand', $brand);
        $this->db->bind(':year', $year);
        $this->db->bind(':price', $price);
        $this->db->bind(':image', $imagePath);
        return $this->db->execute();
    }
}
