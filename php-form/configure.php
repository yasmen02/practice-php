<?php

class Database
{
    public $db_name = "practice";
    public $db_user = "root";
    public $db_pass = "";
    public $db;

    public function __construct()
    {

        try {
            $this->db = new PDO('mysql:host=localhost;dbname=' . $this->db_name . ';charset=utf8', $this->db_user, $this->db_pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function insertUser($first_name, $last_name, $email, $password)
    {
        try {
            $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';
            //validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                echo $emailErr;
                return false;
            }

            // Check if email already exists in the database
            $sql_check = "SELECT COUNT(*) AS count FROM users WHERE email = ?";
            $stmt_check = $this->db->prepare($sql_check);
            $stmt_check->execute([$email]);
            $row = $stmt_check->fetch(PDO::FETCH_ASSOC);

            if ($row['count'] > 0) {
                echo "Email already exists <br>";
                echo '<a href="login.html">LogIn!</a>';
                return; // Stop execution if email already exists
            }

            if (!preg_match($pattern, $password)) {
                echo "Invalid Password";
            } else {
                $hash = password_hash($password, PASSWORD_BCRYPT);
                $sql = "INSERT INTO users (first_name, last_name, email, password) values (?,?,?,?)";
                $stmt = $this->db->prepare($sql);
                return $stmt->execute([$first_name, $last_name, $email, $hash]);
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    public function login($email, $password)
    {
        try {
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$email]);
            $user = $stmt->fetch();
            if ($user && password_verify($password, $user['password'])) {
                return $user;
            } else {
                return false;
            }
        }
        catch (PDOException $e) {
            return false;
        }

    }

    public function forgetPassword($email, $password, $confirm_password)
    {
        try{
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';

        $sql_check = "SELECT COUNT(*) AS count FROM users WHERE email = ?";
        $stmt_check = $this->db->prepare($sql_check);
        $stmt_check->execute([$email]);
        $row = $stmt_check->fetch(PDO::FETCH_ASSOC);

        if ($row['count'] > 0) {
            if ($password == $confirm_password) {
                if (preg_match($pattern, $password)) {
                    $sql = "UPDATE users SET password = ? WHERE email = ?";
                    $stmt = $this->db->prepare($sql);
                    return $stmt->execute([$hash, $email]);
                }}}else{
            return false;
        }}catch (PDOException $e) {
            return false;
        }
    }
}

?>