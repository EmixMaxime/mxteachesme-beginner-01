<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expectedFields = ['first-name', 'last-name', 'email', 'password', 'repeat-password'];

    $params = [];
    foreach($expectedFields as $field) {
        $param = $_POST[$field] ?? null;
        array_push($params, $param);
    }

    var_dump($params); // -> ['Maxime', 'Moreau', null, 'bonjour', 'bonjour']
}

require '../views/signup.view.php';