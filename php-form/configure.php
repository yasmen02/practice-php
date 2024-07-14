<?php
class Database{
    public $db_name="practice";
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
            } else{
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (first_name, last_name, email, password) values (?,?,?,?)";
            $stmt = $this->db->prepare($sql);
            $result = $stmt->execute([$first_name, $last_name, $email, $hash]);
            if ($result) {
                echo "New record created successfully";
            } else {
                echo "Error inserting record";
            }}
        }catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }
    public function login($email, $password)
    {
        try {
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$email]);
            $user = $stmt->fetch();
            if ($user) {
                // User Exists
                if (password_verify($password, $user['password'])) {
                    echo "Login Successful";
                } else {
                    // Wrong Password
                    echo "Login failed";
                }
            } else {
                // User not found
                echo "Your email is not registered.<br>";
                echo "<a href='regist.html'>Go to register page</a>";
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function forgetPassword($email, $password,$confirm_password){
        // Check if email already exists in the database
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $sql_check = "SELECT COUNT(*) AS count FROM users WHERE email = ?";
        $stmt_check = $this->db->prepare($sql_check);
        $stmt_check->execute([$email]);
        $row = $stmt_check->fetch(PDO::FETCH_ASSOC);
        if ($row['count'] > 0) {
            if ($password == $confirm_password) {
            $sql = "UPDATE users SET password = ? WHERE email = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$hash, $email]);
            echo 'update your password <br>';
            echo '<a href="login.html">LogIn!</a>';
        }}else{
            echo "Your email is not registered.<br>";
        }
    }
}
?>