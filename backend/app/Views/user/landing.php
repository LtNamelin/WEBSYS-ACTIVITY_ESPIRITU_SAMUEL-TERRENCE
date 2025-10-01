<?php
// landing.php
$title = "Landing Page";
?>
<!DOCTYPE html>
<html lang="en">

<?= view('components/head'); ?>
<?= view('components/styles'); ?>

<body>
    <?= view('components/header'); ?>

    <main>
        <h1>Welcome to LtNamelin's Art Portfolio!</h1>
        <h2><i>"This website is still under active development."</i></h2>
    </main>

    <?= view('components/footer'); ?>
</body>

</html>