<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first-name'] ?? null;
    $lastName = $_POST['last-name'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $repeatPassword = $_POST['repeat-password'] ?? null;
}

require '../views/signup.view.php';