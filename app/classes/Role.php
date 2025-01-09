<?php
class Role {
    private $conn;
    private $id;
    private $name;

    public function __construct($db, $id , $name) {
        $this->conn = $db;
        $this->id = $id;
        $this->name = $name;
    }
    public function getId($Id) {
        return $this->id;
    }
    public function getname($name) {
        return $this->name;
    }
}