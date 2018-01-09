<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expectedFields = ['first-name', 'last-name', 'email', 'password', 'repeat-password'];

    $params = [];
    foreach($expectedFields as $fieldName) {
        $value = $_POST[$fieldName] ?? null;
        $params[$fieldName] = $value;
    }

    var_dump($params); // ['first-name' => 'Maxime', 'last-name' => null, ...]
}

require '../views/signup.view.php';