<?php

function add()
{
	global $pdo;
	$user = $_SESSION['user'] ?? null;

	if ($user === null) {
		// Authentification is required
		return http_response_code(401);
	}

	$expectedFields = ['message' => 'nonEmptyString'];
	$params = getBodyFromExpectedFields(array_keys($expectedFields));
	
    /**
     * Validation des entrées du formulaire
     */
	$errors = validator($expectedFields, $params);
	
	if (count($errors) !== 0) {
		http_response_code(400);
		echo json_encode($errors);
		exit();
	}

	$query = $pdo->prepare("INSERT INTO messages(user_id, message, date) VALUES(?,?, NOW())");
	$query->execute([$user['id'], $params['message']]);

	$msg = $pdo->lastInsertId();
	$message = $pdo->query('
		SELECT * FROM messages INNER JOIN users ON messages.user_id = users.id
	')->fetch();


	ob_start();	
	require dirname(dirname(__DIR__)) . '/views/parts/message.view.php';
	$html = ob_get_clean();

	echo json_encode(['html' => $html]);
}
