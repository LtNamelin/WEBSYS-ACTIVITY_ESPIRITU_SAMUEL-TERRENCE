<?php
// login.php
$title = "Log-in";
?>
<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['title' => $title]); ?>
<?= view('components/styles'); ?>

<body>
    <?= view('components/header'); ?>

    <!-- Log-in Page Content -->
    <?= view('components/login_content'); ?>


    <?= view('components/footer'); ?>
</body>

</html>