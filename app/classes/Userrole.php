<?php
class Userrole {
    private $user_id;
    private $role_id;
    public function __construct($user_id, $role_id) {
        $this->role_id = $role_id;
        $this->user_id = $user_id;
    }
    public function setUserrole($user_id, $role_id) {
        $this->user_id = $user_id;
        $this->role_id = $role_id;
    }
    public function add() {
        $query = "INSERT INTO User_Role (user_id, role_id) VALUES (:user_id, :role_id)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_INT);
        $stmt->bindParam(':role_id', $this->role_id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function delete() {
        $query = "DELETE FROM User_Role WHERE user_id = :user_id AND role_id = :role_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_INT);
        $stmt->bindParam(':role_id', $this->role_id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function read($user_id) {
        $query = "SELECT r.id, r.role_name FROM Role r 
                  JOIN User_Role ur ON ur.role_id = r.id
                  WHERE ur.user_id = :user_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getUsers_role($role_id) {
        $query = "SELECT u.id, u.username FROM User u 
                  JOIN User_Role ur ON ur.user_id = u.id
                  WHERE ur.role_id = :role_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':role_id', $role_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>