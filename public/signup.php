<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expectedFields = ['first-name', 'last-name', 'email', 'password', 'repeat-password'];

    $params = [];
    foreach($expectedFields as $fieldName) {
        $value = $_POST[$fieldName] ?? null;
        $params[$fieldName] = $value;
    }

    var_dump($params); // ['first-name' => 'Maxime', 'last-name' => null, ...]

    /**
     * Validation des entrées du formulaire
     */

    if (is_null($params['first-name']) || empty($params['first-name'])) {
        echo 'Veuillez remplir first-name';
    }

    if (is_null($params['last-name']) || empty($params['last-name'])) {
        echo 'Veuillez remplir last-name';
    }

    if (is_null($params['email']) || empty($params['email'])) {
        echo 'Veuillez remplir email';
    }

    if (is_null($params['password']) || empty($params['password'])) {
        echo 'Veuillez remplir password';
    }

    if (is_null($params['repeat-password']) || empty($params['repeat-password'])) {
        echo 'Veuillez remplir repeat-password';
    } else if ($params['repeat-password'] !== $params['password'] && (!is_null($params['password']) && !empty($params['password']))) {
        echo 'Vos mots de passe ne correspondent pas !';
    }

}

require '../views/signup.view.php';