<?php

function layout(?String $blockBody, ?String $blockFooter) {

	if(!$blockBody) {
		throw new Exception('You have to create an blockBody');
	}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>Apprendre PHP sur mxteaches.me</title>
</head>

    <body>
    <?php
        // Création d'un "block"
        echo $blockBody;
    ?>
	</body>

	<?= $blockFooter; ?>
	
</html>

<?php
}
?>
