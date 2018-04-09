<?php

function render(String $templateName, array $data = []): void
{
	foreach($data as $variableName => $value) {
		$GLOBALS[$variableName] = $value;
	}

    require("../views/$templateName.view.php");

    if (function_exists('extends_layout')) {
        ob_start();
        extends_layout();
        block_body();
        $block = ob_get_clean();

        require('../views/layout.view.php');

        $content = yield_body($block);
        echo $content;
    }
}
