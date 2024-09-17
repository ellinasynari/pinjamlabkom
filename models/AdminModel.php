
<?php
require_once 'config/database.php';

class AdminModel {
    public function checkLogin($username, $password) {
        global $pdo;
        $stmt = $pdo->prepare('SELECT * FROM admin WHERE username = :username AND password = :password');
        $stmt->execute(['username' => $username, 'password' => $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
