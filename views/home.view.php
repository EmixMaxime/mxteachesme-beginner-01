<?php

require('../src/session.php');

function extends_layout() {
    function block_body() {
        require('parts/header.view.php');

?>

<div class="container mx-auto mt-8">

    <?php
		require('parts/alerts.view.php');
    ?>
</div>

<?php
    }
}
?>
