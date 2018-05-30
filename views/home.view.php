<?php

function extends_layout() {
    function block_body() {
		global $messages;
        require('parts/header.view.php');

?>

<div class="font-sans pt-8 bg-grey-lighter flex flex-col min-h-screen w-full">
	<?php
		require('parts/alerts.view.php');
	?>

	<?php if (isset($user)) { ?>
	<div class="flex flex-wrap -mx-4">
		<div class="w-full mb-6 lg:mb-0 lg:w-1/2 px-4 flex flex-col mx-auto">
			<div class="flex-grow flex flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden">
				
				<div class="border-b">
					<div class="flex justify-between px-6 -mb-px">
						<h3 class="text-blue-dark py-4 font-normal text-lg">Exprimez-vous, <?= $user['first_name'] ?></h3>
					</div>
				</div>

				<div class="px-6 py-6 text-grey-darker items-center border-b">
					<form action="message.php" method="POST" id="myform">
						<textarea class="w-full" name="" id="" cols="30" rows="10" placeholder="Qu'avez-vous fait aujourd'hui ?"></textarea>
						<button class="bg-teal hover:bg-teal-dark border-teal hover:border-teal-dark text-sm border-4 text-white py-1 px-2 rounded" type="submit">Envoyer</button>
					</form>
				</div>

			</div>
		</div>
	</div>
	<?php } ?>

	<div id="feed">
		<?php
			foreach($messages as $message) {
				require __DIR__ . '/parts/message.view.php';
			}
		?>
	</div>

</div>

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="js/home.js"></script>


<?php
    }
}
?>
