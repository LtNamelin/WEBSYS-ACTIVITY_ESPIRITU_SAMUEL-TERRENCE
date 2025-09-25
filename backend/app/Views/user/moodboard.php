<?php
// moodboard.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mood Board</title>
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
            padding: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        section {
            margin-bottom: 3rem;
        }

        h1,
        h2 {
            margin-bottom: 1rem;
        }

        /* Colors */
        .color-system {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .color-block {
            text-align: center;
        }

        .color-swatch {
            width: 120px;
            height: 50px;
            border-radius: 8px;
            margin-bottom: 0.5rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Buttons */
        .button-row {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 0.5rem 1.2rem;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-primary {
            background: #F55DC5;
            color: white;
        }

        .btn-secondary {
            background: #2E1622;
            color: white;
        }

        .btn-border {
            background: transparent;
            border: 2px solid #F55DC5;
            color: #F55DC5;
        }

        .btn-disabled {
            background: #777;
            color: #ccc;
            cursor: not-allowed;
        }

        /* Cards */
        .cards {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .card {
            flex: 1;
            min-width: 250px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            padding: 1rem;
        }

        /* Logos */
        .logos {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .logos img {
            width: 120px;
            height: auto;
            background: white;
            padding: 10px;
            border: 2px solid #fff;
        }

        .logo-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            padding: 5px;
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

    <!-- Main -->
    <main>
        <h1>Mood Board</h1>
        <p>Visual identity samples for LtNamelin's Art Portfolio.</p>

        <!-- Color System -->
        <section>
            <h2>Color System</h2>
            <div class="color-system">
                <div class="color-block">
                    <div class="color-swatch" style="background:#2E1622;"></div>
                    <p>#2E1622</p>
                </div>
                <div class="color-block">
                    <div class="color-swatch" style="background:#85295A;"></div>
                    <p>#85295A</p>
                </div>
                <div class="color-block">
                    <div class="color-swatch" style="background:#F55DC5;"></div>
                    <p>#F55DC5</p>
                </div>
                <div class="color-block">
                    <div class="color-swatch" style="background:#FFFFFF;"></div>
                    <p>#FFFFFF</p>
                </div>
            </div>
        </section>

        <!-- Typography -->
        <section>
            <h2>Typography</h2>
            <p><strong>Heading font</strong>: Playfair Display — <span style="font-family:'Playfair Display', serif;">Heading Example</span></p>
            <p><strong>Body font</strong>: Arial — <span>Body text example showing readability.</span></p>
        </section>

        <!-- Buttons -->
        <section>
            <h2>Buttons</h2>
            <div class="button-row">
                <button class="btn btn-primary">Primary</button>
                <button class="btn btn-secondary">Secondary</button>
                <button class="btn-border btn">Border</button>
                <button class="btn btn-disabled" disabled>Disabled</button>
            </div>
        </section>

        <!-- Cards -->
        <section>
            <h2>Card Sample</h2>
            <div class="cards">
                <div class="card">
                    <h3>Artworks include multiple original works and fanart of multiple different franchises.</h3>
                    <p>Artworks</p>
                </div>
                <div class="card">
                    <h3>Commission Info:</h3>
                    <p>Type of artwork, price, quantity.</p>
                </div>
                <div class="card">
                    <blockquote>
                        "Commission and give this artist all of your money now :3c."
                    </blockquote>
                    <p>— Adoring Fan</p>
                </div>
            </div>
        </section>

        <!-- Logos -->
        <section>
            <h2>Logos</h2>
            <div class="logos">
                <div>
                    <img src="https://pbs.twimg.com/profile_images/1774003426726494208/cROsl2JN_400x400.jpg"
                        alt="Logo Circle" class="logo-circle">
                    <p>Main — Circle</p>
                </div>
                <div>
                    <img src="https://pbs.twimg.com/profile_images/1774003426726494208/cROsl2JN_400x400.jpg"
                        alt="Logo Square">
                    <p>Main — Square</p>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer>
        <p>@SamuelTerrenceEspiritu</p>
    </footer>
</body>

</html>