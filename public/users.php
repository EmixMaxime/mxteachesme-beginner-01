<?php

require('../src/view.php');
require('../src/session.php');
require('../src/database.php');
require('../src/http.php');
require('../src/controllers/users.controller.php');

redirectIfNotAuthenticated();

$action = $_GET['action'] ?? null;

if (!is_null($action)) {
    $id = $_GET['id'] ?? null;

    if (is_null($id)) {
        addFlashMessage('warning', "Veuillez ne pas modifier l'url.");
        redirect('users.php');
    }

	if ($action === 'del') {
		delete($id);
	}

	if ($action === 'show') {
		show($id);
	}
} else {
	listAction();
}
