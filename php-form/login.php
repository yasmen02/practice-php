<?php

require_once "configure.php";
// Creating a new instance of the Database class
    $database = new Database();
// Retrieving form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result=$database->login($email, $password);

    if ($result) {
        // Return success message as JSON
        echo json_encode(['success' => true, 'message' => 'Login successful!']);
    } else {
        // Return error message as JSON
        echo json_encode(['success' => false, 'message' => 'Login failed!']);
    }

?>