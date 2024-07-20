<?php
require_once 'configure.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database = new Database();

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $result = $database->forgetPassword($email, $password, $confirm_password);

    if ($result) {
        // Return success message as JSON
        echo json_encode(['success' => true, 'message' => 'Update Password successful!']);
    } else {
        // Return error message as JSON
        echo json_encode(['success' => false, 'message' => 'Update Password failed!']);
    }
}