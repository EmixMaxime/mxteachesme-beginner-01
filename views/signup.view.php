<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>Apprendre PHP sur mxteaches.me</title>
</head>
<body>

<header>
    <nav class="flex items-center justify-between flex-wrap bg-teal p-6">
        <div class="flex items-center flex-no-shrink mr-6">
            <a href="https://mxteaches.me" class="text-white no-underline font-semibold text-xl tracking-tight">mxteaches.me</a>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                    Accueil
                </a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                    Se connecter
                </a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">
                    S'inscrire
                </a>
            </div>
        </div>
    </nav>
</header>

<div class="container mx-auto mt-8">

    <form class="w-full max-w-md mx-auto" method="POST" action="<?= $_SERVER["PHP_SELF"] ?>">

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Prénom
                </label>
                <input name="first-name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Jane">
                <p class="text-red text-xs italic">Veuillez remplir ce champ.</p>
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