<?php

require('../src/view.php');
require('../src/http.php');
require('../src/session.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

addFlashMessage('information', 'something');

render('signin');
