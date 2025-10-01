<?php
// login.php
$title = "Log-in";
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
        /* vertical + horizontal center */
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
        /* force new line */
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