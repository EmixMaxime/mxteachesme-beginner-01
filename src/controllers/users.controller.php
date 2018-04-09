<?php

function listAction()
{
	global $pdo;

	$users = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);

	render('users', compact('users'));
}

function show(int $userId)
{
	global $pdo;
	
	$query = $pdo->prepare("SELECT * from users WHERE id = ?");
	$query->execute([$userId]);
	$user = $query->fetch();

	if (!$user) {
		addFlashMessage('warning', "Une erreur s'est produite lors de l'affichage du compte.");
		redirect('users.php');
	}

	$users = [$user];
	
	render('users', compact('users'));
}

function delete(int $userId)
{
	global $pdo;

	$query = $pdo->prepare("DELETE FROM users WHERE id = ?");
	$c = $query->execute([$userId]);

	if ($c === 0) {
		addFlashMessage('warning', "Une erreur s'est produite lors de la suppression du compte.");
		redirect('users.php');
	}

	addFlashMessage('information', "Le compte portant l'identifiant $userId a bien été supprimé.");
	redirect('users.php');
}
