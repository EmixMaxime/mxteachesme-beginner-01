<?php
require('../src/view.php');
require('../src/session.php');
require('../src/database.php');

$users = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
var_dump($users);
die;

render('users');
