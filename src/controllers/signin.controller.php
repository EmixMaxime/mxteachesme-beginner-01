<?php

function post()
{
	global $pdo;

	$expectedFields = ['email' => 'nonEmptyString', 'password' => 'nonEmptyString'];

	$params = getBodyFromExpectedFields(array_keys($expectedFields));


	$errors = validator($expectedFields, $params);

	[
		'email' => $email,
		'password' => $password
	] = $params;

	if (count($errors) === 0) {
		$query = $pdo->prepare("SELECT * from users WHERE email = :email");
		$query->bindParam(':email', $email);
		$query->execute();
		$user = $query->fetch();

		if ($user && password_verify($password, $user['password'])) {
			$_SESSION['user'] = array_filter($user, function($value, $key) {
				return $key !== 'password';
			}, ARRAY_FILTER_USE_BOTH);

			addFlashMessage('information', "Vous êtes bien connecté.");
			redirect('home.php');
		}

		addFlashMessage('warning', "Désolé, vous avez saisi un mot de passe ou une adresse e-mail incorrecte.");
		redirect('signin.php');
	} else {
		$GLOBALS['errors'] = $errors;
		render('signin');
	}
}

function get()
{
	render('signin');
}
