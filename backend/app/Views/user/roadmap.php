<?php
// roadmap.php
?>
<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['title' => 'Roadmap']); ?>
<?= view('components/styles'); ?>

<style>
    /* Page-specific tweaks for Roadmap (keeps design consistent with original) */
    main h1 {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 2rem;
        font-family: 'Playfair Display', serif;
    }

    .roadmap {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
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

    /* Status label colors (matching Moodboard / Roadmap design) */
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
</style>

<body>
    <?= view('components/header'); ?>

    <!-- Main content -->
    <main>
        <h1>Roadmap</h1>

        <div class="roadmap">

            <?= view('components/card', [
                'title' => 'CRUD Implementation on Services',
                'description' => 'Include the ability to Create, Read, Update, and Delete services on website (Add and remove artworks and manage commissions.)',
                'statusClass' => 'in-progress',
                'statusLabel' => 'In Progress'
            ]) ?>

            <?= view('components/card', [
                'title' => 'Add Artworks Page',
                'description' => 'An online portfolio where I could add my artworks, it should have the ability to display thumbnails and full rendered images with the ability to add new and remove existing images.',
                'statusClass' => 'planned',
                'statusLabel' => 'Planned'
            ]) ?>

            <?= view('components/card', [
                'title' => 'Add Commissions Page',
                'description' => 'An online commission sheet that would allow users to send me a personalized message, and choose a selection of what type of artworks they could commission (Sketch, full-body, Rendered, 2D, 3D, etc.).',
                'statusClass' => 'planned',
                'statusLabel' => 'Planned'
            ]) ?>

            <?= view('components/card', [
                'title' => 'Update Landing Page',
                'description' => 'Update landing page with an introduction of who I am, and a showcase of some of my more well made artworks with the use of carousel.',
                'statusClass' => 'backlog',
                'statusLabel' => 'Backlog'
            ]) ?>

            <?= view('components/card', [
                'title' => 'Ability to create User and Admin accounts',
                'description' => 'Add the ability to create and login user and admin accounts.',
                'statusClass' => 'planned',
                'statusLabel' => 'Planned'
            ]) ?>

            <?= view('components/card', [
                'title' => 'Admin Functionality',
                'description' => 'Ability for admins to moderate website by adding and deleting images in artwork and view all sent in commissions.',
                'statusClass' => 'planned',
                'statusLabel' => 'Planned'
            ]) ?>

            <?= view('components/card', [
                'title' => 'Users managing sent Commissions',
                'description' => 'Allow users the ability to check their sent in commission requests.',
                'statusClass' => 'backlog',
                'statusLabel' => 'Backlog'
            ]) ?>

            <?= view('components/card', [
                'title' => 'Create Log-in and Sign-up page',
                'description' => 'Pages where users could log-in or sign-up either by regular users or admins.',
                'statusClass' => 'done',
                'statusLabel' => 'Done'
            ]) ?>

        </div>
    </main>

    <?= view('components/footer'); ?>
</body>

</html>