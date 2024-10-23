<?php


class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function findByUserName($username)
    {
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username', $username);
        return $this->db->single();
    }

    public function register($username, $password)
    {
        $this->db->query('INSERT INTO users (username, password, role) VALUES (:username, :password, "user")');
    }

    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM users');
        return $this->db->resultSet();
    }
}
