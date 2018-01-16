<?php

$dsn = 'pgsql:host=localhost user=mx dbname=beginners_member_php password=coucou';
$pdo = new PDO($dsn);

// http://php.net/manual/fr/pdo.error-handling.php
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// http://php.net/manual/fr/pdo.exec.php
