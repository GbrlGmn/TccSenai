<?php
include VIEWS . '/Layout/header.php';
include VIEWS . '/Layout/sidebar.php';
?>
<?php
?>
<div id="appShell" class="flex min-h-screen flex-col lg:ml-72">
    <?php include VIEWS . '/Layout/navbar.php'; ?>
    <?php
    ?>
    <main class="flex-1 p-10">
        <?php
        ?>
        <?php $viewToRender = $view ?? VIEWS . '/Home/index.php'; ?>
        <?php
        ?>
        <?php include $viewToRender; ?>
    </main>
    <?php include VIEWS . '/Layout/footer.php'; ?>
</div>
<?php
