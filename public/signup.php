<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expectedFields = ['first-name' => 'nonEmptyString', 'last-name' => 'nonEmptyString', 'email' => 'nonEmptyString', 'password' => 'nonEmptyString', 'repeat-password' => 'nonEmptyString'];

    $params = [];
    foreach($expectedFields as $fieldName => $val) {
        $value = $_POST[$fieldName] ?? null;
        $params[$fieldName] = $value;
    }

    var_dump($params); // ['first-name' => 'Maxime', 'last-name' => null, ...]

    /**
     * Validation des entrées du formulaire
     */

    $errors = [];
    $emptyFail = 'Veuillez remplir ce champ';

    if (empty($params['first-name'])) {
        $errors['first-name'] = $emptyFail;
    }

    if (empty($params['last-name'])) {
        $errors['last-name'] = $emptyFail;
    }

    if (empty($params['email'])) {
        $errors['email'] = $emptyFail;
    }

    if (empty($params['password'])) {
        $errors['password'] = $emptyFail;
    }

    if (empty($params['repeat-password'])) {
        $errors['repeat-password'] = $emptyFail;
    } else if ($params['repeat-password'] !== $params['password'] && !empty($params['password'])) {
        $errors['repeat-password'] = 'Vos mots de passe ne correspondent pas !';
    }
}


function getError(String $fieldName): ?String {
    global $errors;

    if (!is_null($errors) && count($errors) > 0) {
        return $errors[$fieldName] ?? null;
    }

    return null;
}


require '../views/signup.view.php';