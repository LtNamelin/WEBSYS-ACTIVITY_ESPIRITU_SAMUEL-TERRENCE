<?php
// signup.php
$title = "Sign-up";
?>
<!DOCTYPE html>
<html lang="en">

<?= view('components/head'); ?>
<?= view('components/styles'); ?>

<style>
    main {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .signup-page .card {
        width: 360px;
        text-align: center;
    }

    .signup-page .card input {
        width: 100%;
        padding: 5px;
        margin: 10px 0;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        display: block;
    }

    .signup-page .card .btn {
        width: 100%;
        margin-top: 15px;
    }
</style>

<body class="signup-page">
    <?= view('components/header'); ?>

    <!-- Main content -->
    <main>
        <?php
        $content = '
            <form>
                <input type="text" placeholder="E-mail Account" required>
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <input type="password" placeholder="Re-Enter Password" required>
                ' . view('components/button', [
            'label' => 'Create User',
            'type'  => 'submit'
        ]) . '
            </form>
        ';

        echo view('components/card', [
            'title'   => 'Sign-up New User',
            'content' => $content
        ]);
        ?>
    </main>

    <?= view('components/footer'); ?>
</body>

</html>