<?php


use PDO;

class Database
{
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $pdo;
    private $stmt;

    public function __construct()
    {
        $config = require '../app/config/config.php';
        $this->host = $config['db']['host'];
        $this->dbname = $config['db']['dbname'];
        $this->user = $config['db']['user'];
        $this->password = $config['db']['password'];

        $dtb = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $this->pdo = new PDO($dtb, $this->user, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

    public function query($sql)
    {
        $this->stmt = $this->pdo->prepare($sql);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            $type = PDO::PARAM_STR;
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll();
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch();
    }
}
