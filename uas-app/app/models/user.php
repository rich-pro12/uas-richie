<?php
require_once "app/config/Database.php";

class User extends Database {
    public function login($u, $p) {
        $stmt = $this->conn->prepare(
            "SELECT * FROM users WHERE username=? AND password=?"
        );
        $stmt->bind_param("ss", $u, md5($p));
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
