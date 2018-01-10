<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>Apprendre PHP sur mxteaches.me</title>
</head>
<body>

<?php require('parts/header.view.php'); ?>

<div class="container mx-auto mt-8">

    <form class="w-full max-w-md mx-auto" method="POST" action="<?= $_SERVER["PHP_SELF"] ?>">

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Prénom
                </label>
                <input name="first-name" value="<?= getValue('first-name') ?>" class="appearance-none block w-full text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 <?= getError('first-name') ? 'border-red' : 'bg-grey-lighter' ?>" id="grid-first-name" type="text" placeholder="Jane">
                <p class="text-red text-xs italic"><?= getError('first-name') ?></p>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                    Nom
                </label>
                <input name="last-name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Doe">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-email">
                    Email
                </label>
                <input name="email" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-email" type="email">
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                    Mot de passe
                </label>
                <input name="password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="password" placeholder="******************">
                <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                    Mot de passe
                </label>
                <input name="repeat-password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="password" placeholder="******************">
                <p class="text-grey-dark text-xs italic">Juste pour être sûr !</p>
            </div>
        </div>

        <div class="md:flex md:items-center">
            <button class="shadow bg-purple hover:bg-purple-light text-white font-bold py-2 px-4 rounded" type="submit">
                Je m'incris
            </button>
        </div>
    </form>
</div>

</body>
</html>