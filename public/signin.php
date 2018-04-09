<?php

require('../src/view.php');
require('../src/http.php');
require('../src/session.php');
require('../src/validators.php');
require('../src/database.php');
require('../src/controllers/signin.controller.php');

redirectIfAuthenticated();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	post();
} else {
	get();
}
