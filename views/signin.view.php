<?php

function extends_layout() {
	function block_body() {
		require('parts/header.view.php');
?>

<div class="container mx-auto mt-8">
	<?php
		require('parts/alerts.view.php');
	?>

	<form class="w-full max-w-md mx-auto" method="POST" action="<?= $_SERVER["PHP_SELF"] ?>">
		<div class="flex flex-wrap -mx-3 mb-6">

			<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
				<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
					Email
				</label>
				<input name="email" value="<?= getValue('email') ?>" class="appearance-none block w-full text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 <?= getError('email') ? 'border-red' : 'bg-grey-lighter' ?>" id="email" type="email" placeholder="contact@maxime-moreau.fr">
				<p class="text-red text-xs italic"><?= getError('email') ?></p>
			</div>

			<div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="password">
                    Mot de passe
                </label>
                <input name="password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 <?= getError('password') ? 'border-red' : 'bg-grey-lighter' ?>" id="password" type="password">
				<p class="text-red text-xs italic"><?= getError('password') ?></p>
			</div>

		</div>

		<div class="md:flex md:items-center">
			<button class="shadow bg-purple hover:bg-purple-light text-white font-bold py-2 px-4 rounded" type="submit">
				Connexion
			</button>
		</div>
	</form>
<?php
	}
}
