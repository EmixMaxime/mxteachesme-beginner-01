<?php

function nonEmptyString(String $str): ?String {
    if (empty($str)) return 'Veuillez remplir ce champ';

    return null;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expectedFields = ['first-name' => 'nonEmptyString', 'last-name' => 'nonEmptyString', 'email' => 'nonEmptyString', 'password' => 'nonEmptyString', 'repeat-password' => 'nonEmptyString'];

    $params = [];

    foreach($expectedFields as $fieldName => $val) {
        $value = $_POST[$fieldName] ?? null;
        $params[$fieldName] = $value;
    }

    /**
     * Validation des entrées du formulaire
     */

    $errors = [];

    foreach($expectedFields as $fieldName => $validator) {
        $val = $params[$fieldName];
        $fail = $validator($val);

        if (!is_null($fail)) {
            $errors[$fieldName] = $fail;
        }
    }

    if ($params['repeat-password'] !== $params['password'] && !empty($params['password'])) {
        $errors['repeat-password'] = 'Vos mots de passe ne correspondent pas !';
    }

    var_dump($errors);
}


function getError(String $fieldName): ?String {
    global $errors;

    if (!is_null($errors) && count($errors) > 0) {
        return $errors[$fieldName] ?? null;
    }

    return null;
}


require '../views/signup.view.php';