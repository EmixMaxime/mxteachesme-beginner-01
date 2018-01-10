<?php

require('../src/view.php');
require('../src/session.php');
require('../src/database.php');
require('../src/http.php');

$users = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);

$action = $_GET['action'] ?? null;

if (!is_null($action)) {
    $id = $_GET['id'] ?? null;

    if (is_null($id)) {
        addFlashMessage('warning', "Veuillez ne pas modifier l'url.");
        redirect('users.php');
    }

    $c = $pdo->exec("DELETE FROM users WHERE id = $id");
    if ($c === 0) {
        addFlashMessage('warning', "Une erreur s'est produite lors de la suppression du compte.");
        redirect('users.php');
    }

    addFlashMessage('information', "Le compte portant l'identifiant $id a bien été supprimé.");
    redirect('users.php');
}

render('users');
