<?php
require_once 'configure.php';

$database = new Database();

$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];
$database->forgetPassword($email, $password, $confirmPassword);