<?php

require "configure.php";
if(isset($_POST['submit'])) {
// Creating a new instance of the Database class
    $database = new Database();
// Retrieving form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo 'success';
}
?>