<?php

require('../src/view.php');
require('../src/session.php');
require('../src/database.php');
require('../src/http.php');

redirectIfNotAuthenticated();

$action = $_GET['action'] ?? null;

if (!is_null($action)) {
    $id = $_GET['id'] ?? null;

    if (is_null($id)) {
        addFlashMessage('warning', "Veuillez ne pas modifier l'url.");
        redirect('users.php');
    }

	if ($action === 'del') {
		$query = $pdo->prepare("DELETE FROM users WHERE id = ?");
		$c = $query->execute([$id]);

	    if ($c === 0) {
	        addFlashMessage('warning', "Une erreur s'est produite lors de la suppression du compte.");
	        redirect('users.php');
	    }

	    addFlashMessage('information', "Le compte portant l'identifiant $id a bien été supprimé.");
	    redirect('users.php');
	}

	if ($action === 'show') {
		$query = $pdo->prepare("SELECT * from users WHERE id = ?");
		$query->execute([$id]);
		$user = $query->fetch();

		if (!$user) {
			addFlashMessage('warning', "Une erreur s'est produite lors de l'affichage du compte.");
			redirect('users.php');
		}

		$users = [$user];
		render('users');
	}
} else {
	$users = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
	render('users');
}
