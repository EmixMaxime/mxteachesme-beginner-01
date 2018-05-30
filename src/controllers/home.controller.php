<?php

function home()
{
	global $pdo;

	$messages = $pdo->query('SELECT * FROM messages INNER JOIN users ON messages.user_id = users.id')->fetchAll(PDO::FETCH_ASSOC);

	render('home', compact('messages'));
}
