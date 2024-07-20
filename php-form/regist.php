<?php
//$db_name="login";
//$db_user= "root";
//$db_pass= "";
//
//// Establishing a PDO connection to MySQL database
//$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
///*
//The isset() function checks whether a variable is set,
// which means that it has to be declared and is not NULL.
//*/
//if(isset($_POST['submit'])) {
//    // Retrieving form data
//    $first_name = $_POST['first_name'];
//    $last_name = $_POST['last_name'];
//    $email = $_POST['email'];
//    $password = $_POST['password'];
//
//    // Hashing the password
//    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
//
//    // Preparing SQL query to insert user data
//    $sql = "INSERT INTO users (first_name, last_name, email, password) values (?,?,?,?)";
//    $stmtinsert = $db->prepare($sql);
//
//    // Executing the prepared statement with user data
//    $result = $stmtinsert->execute([$first_name, $last_name, $email, $hashed_password]);
//
//    // Checking if the insertion was successful
//    if ($result) {
//        echo "New record created successfully";
//    } else {
//        echo "Error inserting record";
//    }
//
//    // Optional: Displaying the submitted data (for testing purposes)
//    echo $first_name . " " . $last_name . " " . $email . " " . $password;
//}
//?>
<?php
require_once 'configure.php';
//if(isset($_POST['submit'])) {
//// Creating a new instance of the Database class
//    $database = new Database();
//
//// Retrieving form data
//    $first_name = $_POST['first_name'];
//    $last_name = $_POST['last_name'];
//    $email = $_POST['email'];
//    $password = $_POST['password'];
//// Inserting user using the Database object
//    $database->insertUser($first_name, $last_name, $email, $password);
//
//}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Creating a new instance of the Database class
    $database = new Database();

    // Retrieving form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Inserting user using the Database object
    $result = $database->insertUser($first_name, $last_name, $email, $password);

    if ($result) {
        // Return success message as JSON
        echo json_encode(['success' => true, 'message' => 'Registration successful!']);
    } else {
        // Return error message as JSON
        echo json_encode(['success' => false, 'message' => 'Registration failed!']);
    }
}
?>
