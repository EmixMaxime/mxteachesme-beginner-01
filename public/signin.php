<?php

require('../src/view.php');
require('../src/http.php');
require('../src/session.php');
require('../src/validators.php');
require('../src/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$expectedFields = ['email' => 'nonEmptyString', 'password' => 'nonEmptyString'];

	$params = getBodyFromExpectedFields(array_keys($expectedFields));

	$errors = validator($expectedFields, $params);

	[
		'email' => $email,
		'password' => $password
	] = $params;

	if (count($errors) === 0) {
		$user = $pdo->query("SELECT * from users WHERE email = '$email'")->fetch();

		if ($user && password_verify($password, $user['password'])) {
			$_SESSION['user'] = array_filter($user, function($value, $key) {
				return $key !== 'password';
			}, ARRAY_FILTER_USE_BOTH);
			redirect('home.php');
		}

		addFlashMessage('warning', "Désolé, vous avez saisi un mot de passe ou une adresse e-mail incorrecte.");
		redirect('signin.php');
	}

}

render('signin');
