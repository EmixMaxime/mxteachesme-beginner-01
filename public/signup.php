<?php

require('../src/http.php');
require('../src/session.php');
require('../src/validators.php');
require('../src/database.php');
require('../src/controllers/signup.controller.php');
require('../src/view.php');

redirectIfAuthenticated();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
	post();
} else {
	get();
}

