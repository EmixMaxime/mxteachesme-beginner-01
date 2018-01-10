<?php

function extends_layout() {
    function block_body() {
        require('parts/header.view.php');

?>

<div class="font-sans pt-8 bg-grey-lighter flex flex-col min-h-screen w-full">

        <div class="flex flex-wrap -mx-4">
            <div class="w-full mb-6 lg:mb-0 lg:w-1/2 px-4 flex flex-col mx-auto">

                <?php
                $information = getFlashMessage('information');
                $warning = getFlashMessage('warning');

                if (!is_null($information)) {
                ?>
                    <div class="bg-teal-lightest border-t-4 border-teal rounded-b text-teal-darkest px-4 py-3 shadow-md mb-8" role="alert">
                        <div class="flex">
                            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                            <div>
                                <p class="font-bold"><?= $information ?></p>
                            </div>
                        </div>
                    </div>

                <?php
                }

                if (!is_null($warning)) {
                    ?>
                    <div class="bg-orange-lightest border-t-4 border-orange rounded-b text-teal-darkest px-4 py-3 shadow-md mb-8" role="alert">
                        <div class="flex">
                            <div>
                                <p class="font-bold"><?= $warning ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

                <div class="flex-grow flex flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden">

                    <div class="border-b">
                        <div class="flex justify-between px-6 -mb-px">
                            <h3 class="text-blue-dark py-4 font-normal text-lg">Users</h3>
                        </div>
                    </div>

                    <div class="flex-grow flex px-6 py-6 text-grey-darker items-center border-b -mx-4">

                        <div class="w-1/4 xl:w-1/4 px-4 flex items-center">
                            <span class="text-lg">Maxime</span>
                        </div>

                        <div class="w-1/4 xl:flex hidden md:flex lg:hidden px-4 items-center">
                            something@gmail.com
                        </div>

                        <div class="w-1/2 flex px-4">
                            <div class="w-full text-right">
                                <a href="#" class="text-grey">
                                    Supprimer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php
    }
}
?>
