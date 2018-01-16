<?php

require('../src/http.php');
require('../src/session.php');
require('../src/validators.php');
require('../src/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expectedFields = ['first-name' => 'nonEmptyString', 'last-name' => 'nonEmptyString', 'email' => 'nonEmptyString', 'password' => 'nonEmptyString!password', 'repeat-password' => 'nonEmptyString'];

    $params = getBodyFromExpectedFields(array_keys($expectedFields));

    /**
     * Validation des entrées du formulaire
     */

    $errors = validator($expectedFields, $params);

    [
      'repeat-password' => $repeatPassword,
      'password' => $password,
      'email' => $email,
      'first-name' => $firstName,
      'last-name' => $lastName
    ] = $params;


    if ($repeatPassword !== $password && !empty($password)) {
        $errors['repeat-password'] = 'Vos mots de passe ne correspondent pas !';
    }

    if (count($errors) === 0) {
    	addFlashMessage('information', "Hello world, I'm a flash message !");

		$password = password_hash($password, PASSWORD_BCRYPT);
        $r = $pdo->exec("INSERT INTO users(email, first_name, last_name, password) VALUES('$email', '$firstName', '$lastName', '$password')"
        );

        if ($r === 0) {
          addFlashMessage('warning', "Une erreur s'est produite lors de votre inscription");
          redirect('/signup.php');
        }

        addFlashMessage('information', "Vous pouvez désormais vous connecter.");
        redirect('/signin.php');
    }
}

addFlashMessage('information', "Hello world, I'm a flash message !");


require('../src/view.php');

render('signup');
