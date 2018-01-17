<?php

require('../src/session.php');
require('../src/http.php');

redirectIfNotAuthenticated();

addFlashMessage('information', 'À bientôt !');
unset($_SESSION['user']);
redirect('/home.php');
