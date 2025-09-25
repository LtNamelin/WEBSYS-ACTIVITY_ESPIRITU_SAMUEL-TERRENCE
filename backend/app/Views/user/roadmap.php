<?php
// roadmap.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Roadmap</title>
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

        main h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
            font-family: 'Playfair Display', serif;
        }

        /* Roadmap card container */
        .roadmap {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        /* Card style (from moodboard) */
        .card {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            padding: 1rem 1.5rem;
        }

        .card h2 {
            margin: 0 0 0.5rem 0;
            font-size: 1.3rem;
            font-family: 'Playfair Display', serif;
        }

        .card p {
            margin: 0 0 1rem 0;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* Status labels styled like moodboard buttons */
        .status {
            display: inline-block;
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: bold;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background: transparent;
        }

        .planned {
            color: #4da3ff;
            border-color: #4da3ff;
        }

        .in-progress {
            color: #5cd67d;
            border-color: #5cd67d;
        }

        .done {
            color: #00e6b8;
            border-color: #00e6b8;
        }

        .backlog {
            color: #bbbbbb;
            border-color: #bbbbbb;
        }

        footer {
            background-color: #F55DC5;
            text-align: center;
            padding: 10px 0;
            font-weight: bold;
        }
    </style>
    <!-- Playfair font import -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
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
        <h1>Roadmap</h1>
        <div class="roadmap">

            <div class="card">
                <h2>CRUD Implementation on Services</h2>
                <p>Include the ability to Create, Read, Update, and Delete services on website (Add and remove artworks, merchandise, manage commissions.)</p>
                <span class="status in-progress">In Progress</span>
            </div>

            <div class="card">
                <h2>Add Artworks Page</h2>
                <p>An online portfolio where I could add my artworks, it should have the ability to display thumbnails and full rendered images with the ability to add new and remove existing images.</p>
                <span class="status planned">Planned</span>
            </div>

            <div class="card">
                <h2>Add Commissions Page</h2>
                <p>An online commission sheet that would allow users to send me a personalized message, and choose a selection of what type of artworks they could commission (Sketch, full-body, Rendered, 2D, 3D, etc.).</p>
                <span class="status planned">Planned</span>
            </div>

            <div class="card">
                <h2>Add Merchandise Page</h2>
                <p>Online page to display possible merch items I would sell (All proof of concept for the sake of project, none officially made).</p>
                <span class="status planned">Planned</span>
            </div>

            <div class="card">
                <h2>Update Landing Page</h2>
                <p>Update landing page with an introduction of who I am, and a showcase of some of my more well made artworks with the use of carousel.</p>
                <span class="status backlog">Backlog</span>
            </div>

            <div class="card">
                <h2>Ability to create User and Admin accounts</h2>
                <p>Add the ability to create and login user and admin accounts.</p>
                <span class="status planned">Planned</span>
            </div>

            <div class="card">
                <h2>Admin Functionality</h2>
                <p>Ability for admins to moderate website by adding and deleting images in artwork, adjusting pricing and available items in merchandise, and view all sent in commissions.</p>
                <span class="status planned">Planned</span>
            </div>

            <div class="card">
                <h2>Users managing sent Commissions and Merchandise Cart</h2>
                <p>Allow users the ability to check their sent in commission requests, and hve a cart for items they wish to purchase in the merchandise page.</p>
                <span class="status backlog">Backlog</span>
            </div>

            <div class="card">
                <h2>Create Log-in and Sign-up page</h2>
                <p>Pages where users could log-in or sign-up either by regular users or admins.</p>
                <span class="status done">Done</span>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>@SamuelTerrenceEspiritu</p>
    </footer>

</body>

</html>