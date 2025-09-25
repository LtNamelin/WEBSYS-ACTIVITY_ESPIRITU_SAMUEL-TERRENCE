<?php
// landing.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <!-- Import Playfair Display font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
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

        .nav-links li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .nav-links li a:hover {
            color: #2E1622;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .nav-center {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 25px;
        }

        .logo-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        main h1,
        main h2 {
            font-family: 'Playfair Display', serif;
        }

        main h1 {
            font-size: 2rem;
            margin-bottom: 15px;
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
        <nav class="navbar">
            <div class="nav-center">
                <ul class="nav-links">
                    <li><a href="<?= base_url('/') ?>">Home</a></li>
                    <li><a href="<?= base_url('/login') ?>">Log-in</a></li>
                    <li><a href="<?= base_url('/signup') ?>">Sign-up</a></li>
                    <li><a href="<?= base_url('/moodboard') ?>">Moodboard</a></li>
                    <li><a href="<?= base_url('/roadmap') ?>">Roadmap</a></li>
                </ul>
            </div>
            <img src="https://pbs.twimg.com/profile_images/1774003426726494208/cROsl2JN_400x400.jpg"
                alt="Logo" class="logo-img">
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