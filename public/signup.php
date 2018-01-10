<?php

require('../src/http.php');
require('../src/session.php');

function nonEmptyString(String $str): ?String {
    if (empty($str)) return 'Veuillez remplir ce champ';

    return null;
}

function password(String $pass): ?String {
    if (strlen($pass) < 6) return 'Mot de passe est trop petit';

    return null;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expectedFields = ['first-name' => 'nonEmptyString', 'last-name' => 'nonEmptyString', 'email' => 'nonEmptyString', 'password' => 'nonEmptyString!password', 'repeat-password' => 'nonEmptyString'];

    $params = getBodyFromExpectedFields(array_keys($expectedFields));

    /**
     * Validation des entrées du formulaire
     */

    $errors = validator($expectedFields, $params);

    if ($params['repeat-password'] !== $params['password'] && !empty($params['password'])) {
        $errors['repeat-password'] = 'Vos mots de passe ne correspondent pas !';
    }

    var_dump($errors);

    if (count($errors) === 0) {
        addFlashMessage('information', "Hello world, I'm a flash message !");
        redirect('/home.php');
    }
}

addFlashMessage('information', "Hello world, I'm a flash message !");


require('../src/view.php');

render('signup');
