<?php

namespace App;

use PDO;

class Database
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    public function getPDO()
    {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:host=localhost;dbname=cinemaa', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }

        return $this->pdo;
    }

    public function query($statement, $class_name)
    {
        $resu = $this->getPDO()->query($statement);
        $donnee = $resu->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $donnee;
    }

    public function prepare($statement, $attributes, $class_name, $one = false)
    {
        $requ = $this->getPDO()->prepare($statement);
        $requ->execute($attributes);
        $requ->setFetchMode(PDO::FETCH_CLASS, $class_name);

        if ($one) {
            $data = $requ->fetch();
        } else {
            $data = $requ->fetchAll();
        }

        return $data;
    }
}
