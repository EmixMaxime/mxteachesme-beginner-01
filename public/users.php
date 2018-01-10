<?php
require('../src/view.php');
require('../src/session.php');
require('../src/database.php');

$users = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);

render('users');
