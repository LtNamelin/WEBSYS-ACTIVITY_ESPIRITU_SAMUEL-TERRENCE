<?php
// landing.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
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
            flex-direction: column;
            /* stack items vertically */
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        main h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            /* space between h1 and h2 */
        }

        main h2 {
            font-size: 1.2rem;
            font-weight: normal;
            font-style: italic;
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
        <h1>Welcome to LtNamelin's Art Portfolio!</h1>
        <h2>"This website is still under active development."</h2>
    </main>

    <!-- Footer -->
    <footer>
        <p>@SamuelTerrenceEspiritu</p>
    </footer>

</body>

</html>