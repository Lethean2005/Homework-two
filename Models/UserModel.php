<?php
class UserModel {
    private $db;
    public function __construct() {
        $this->db = new Database("localhost", "rd_store_db", "root", "");
    }

    public function getUsers() {
        $result = $this->db->query("SELECT * FROM users");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id) {
        $result = $this->db->query("SELECT * FROM users WHERE id = :id", ['id' => $id]);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    public function createUser($name, $email, $password, $role) {
        $result = $this->db->query("INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)", [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role' => $role
        ]);
        return $result;
    }

    public function updateUser($id, $name, $email, $role) {
        $result = $this->db->query("UPDATE users SET name = :name, email = :email, role = :role WHERE id = :id", [
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'role' => $role
        ]);
        return $result;
    }

    public function deleteUser($id) {
        $result = $this->db->query("DELETE FROM users WHERE id = :id", ['id' => $id]);
        return $result;
    }
    public function getUserByEmail($email) {
        $result = $this->db->query("SELECT * FROM users WHERE email = :email", ['email' => $email]);
        return $result->fetch(PDO::FETCH_ASSOC);
    }


}