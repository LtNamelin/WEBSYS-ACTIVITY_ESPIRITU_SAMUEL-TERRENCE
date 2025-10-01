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

    .card {
        background-color: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        padding: 30px;
        width: 320px;
        text-align: center;
    }

    .card input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        display: block;
    }

    .card .btn {
        width: 100%;
        padding: 12px;
        background-color: #F55DC5;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        margin-top: 15px;
    }

    .card .btn:hover {
        background-color: #c4459a;
    }
</style>

<body>
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