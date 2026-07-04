<?php

include VIEWS . '/Layout/header.php';
include VIEWS . '/Layout/sidebar.php';

?>

<div class="lg:ml-72 min-h-screen flex flex-col">

    <?php include VIEWS . '/Layout/navbar.php'; ?>

    <main class="flex-1 p-10">

        <?php include $view; ?>

    </main>

    <?php include VIEWS . '/Layout/footer.php'; ?>

</div>