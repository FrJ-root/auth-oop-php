<?php
class User {
    private $id;
    private $username;
    private $fullname;
    private $password;
    private $createdAt;
    public function __construct($id, $username, $fullname, $password, $createdAt = null) {
        $this->id = $id;
        $this->username = $username;
        $this->fullname = $fullname;
        $this->password = $password;
        $this->createdAt = $createdAt ? $createdAt : date("Y-m-d H:i:s");  // Default to current timestamp if null
    }
    public function getId() {
        return $this->id;
    }
    public function getUsername() {
        return $this->username;
    }
    public function getFullname() {
        return $this->fullname;
    }
    public function getPassword() {
        return $this->password;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setFullname($fullname) {
        $this->fullname = $fullname;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    public function displayUserInfo() {
        echo "User ID: " . $this->getId() . "<br>";
        echo "Username: " . $this->getUsername() . "<br>";
        echo "Full Name: " . $this->getFullname() . "<br>";
        echo "Created At: " . $this->getCreatedAt() . "<br>";
    }
}
$user = new User(1, "admin", "Abelqoudouss Chabab", "$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa");
$user->displayUserInfo();
?>
