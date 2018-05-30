<?php

function render(String $templateName, array $data = []): void
{
	foreach($data as $variableName => $value) {
		$GLOBALS[$variableName] = $value;
	}

    require("../views/$templateName.view.php");

    if (function_exists('extends_layout')) {
		extends_layout();

		ob_start();
		block_body();
		$blockBody = ob_get_clean();

		ob_start();
		block_footer();
		$blockFooter = ob_get_clean();


		require('../views/layout.view.php');
		
		ob_start();
		layout($blockBody, $blockFooter);
		$html = ob_get_clean();

        echo $html;
    }
}
