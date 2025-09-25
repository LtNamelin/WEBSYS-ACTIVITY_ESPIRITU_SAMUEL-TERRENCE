<?php
// signup.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Log-in</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #2E1622, #85295A);
            color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #F55DC5;
            padding: 15px 0;
        }

        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 25px;
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .nav-links li a:hover {
            color: #2E1622;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        main h1 {
            text-align: center;
            font-size: 2rem;
        }

        footer {
            background-color: #F55DC5;
            text-align: center;
            padding: 10px 0;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <nav>
            <ul class="nav-links">
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('/login') ?>">Log-in</a></li>
                <li><a href="<?= base_url('/signup') ?>">Sign-up</a></li>
                <li><a href="<?= base_url('/moodboard') ?>">Moodboard</a></li>
                <li><a href="<?= base_url('/roadmap') ?>">Roadmap</a></li>
            </ul>
        </nav>
    </header>
    <!-- Main content -->
    <main>
        <h1>Log-in Page Under Development</h1>
    </main>

    <!-- Footer -->
    <footer>
        <p>@SamuelTerrenceEspiritu</p>
    </footer>

</body>

</html>