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

    <!-- Main content -->
    <main class="login-page">
        <?php
        // Build the login form content
        $content = '
            <form>
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                ' . view('components/button', [
            'label' => 'Log-in',
            'type'  => 'submit'
        ]) . '
            </form>
        ';

        echo view('components/card', [
            'title'   => 'Log-in User',
            'content' => $content
        ]);
        ?>
    </main>

    <?= view('components/footer'); ?>
</body>

</html>