<?php

require('../src/view.php');
require('../src/http.php');
require('../src/session.php');
require('../src/validators.php');
require('../src/database.php');
require('../src/controllers/message.controller.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	add();
} else {
	get();
}
