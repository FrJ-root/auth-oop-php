<?php
require __DIR__ . '/../../vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

class Database{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    public function __construct(){
        $this->servername = $_ENV['localhost'];
        $this->username = $_ENV['root'];
        $this->password = $_ENV[''];
        $this->dbname = $_ENV['situation'];
    }
    public function connection(){
        try {
            $dsn = "mysql:host=$this->servername;dbname=$this->dbname;charset=utf8mb4";
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
            echo "Connected successfully";
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}