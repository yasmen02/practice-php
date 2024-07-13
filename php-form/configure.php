<?php
class Database{
    public $db_name="login";
    public $db_user= "root";
    public $db_pass= "";
    public $db;
    public function __construct(){
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=' . $this->db_name . ';charset=utf8', $this->db_user, $this->db_pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function insertUser($first_name, $last_name, $email, $password){
        try {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (first_name, last_name, email, password) values (?,?,?,?)";
            $stmt = $this->db->prepare($sql);
            $result = $stmt->execute([$first_name, $last_name, $email, $hashed_password]);
            if ($result) {
                echo "New record created successfully";
            } else {
                echo "Error inserting record";
            }
        }catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }
}
?>