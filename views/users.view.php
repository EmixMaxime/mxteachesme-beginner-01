<?php

function extends_layout() {
    function block_body() {
		// "import" needed variables.
        global $users;
        require('parts/header.view.php');

?>

<div class="font-sans pt-8 bg-grey-lighter flex flex-col min-h-screen w-full">

        <div class="flex flex-wrap -mx-4">
            <div class="w-full mb-6 lg:mb-0 lg:w-1/2 px-4 flex flex-col mx-auto">

                <?php
					require('parts/alerts.view.php');
				?>

                <div class="flex-grow flex flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden">

                    <div class="border-b">
                        <div class="flex justify-between px-6 -mb-px">
                            <h3 class="text-blue-dark py-4 font-normal text-lg">Users</h3>
                        </div>
                    </div>

                    <?php
                    foreach($users as $user) {
                    ?>
                        <div class="flex-grow flex px-6 py-6 text-grey-darker items-center border-b -mx-4">

                            <div class="w-1/4 xl:w-1/4 px-4 flex items-center">
                                <span class="text-lg"><?= $user['first_name'] ?></span>
                            </div>

                            <div class="w-3/4 xl:flex hidden md:flex lg:hidden px-4 items-center">
                                <?= $user['email'] ?>
                            </div>

                            <div class="w-1/2 flex px-4 text-right">
								<div class="w-full">
									<a href="?action=show&id=<?= $user['id'] ?>" class="text-grey">
										Afficher
									</a>
								</div>
								<div class="w-full">
									<a href="?action=del&id=<?= $user['id'] ?>" class="text-grey">
										Supprimer
									</a>
								</div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
</div>

<?php
    }
}
?>
