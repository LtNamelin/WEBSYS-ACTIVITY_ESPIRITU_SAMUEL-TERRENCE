<?php
// moodboard.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mood Board</title>
    <?= view('components/styles'); ?>
</head>

<body>
    <!-- Header -->
    <?= view('components/header'); ?>

    <!-- Main -->
    <main>
        <h1>Mood Board</h1>
        <p>Visual identity samples for LtNamelin's Art Portfolio.</p>

        <!-- Color System -->
        <?= view('components/colorsystem'); ?>

        <!-- Typography -->
        <?= view('components/typography'); ?>

        <!-- Buttons -->
        <section>
            <h2>Buttons</h2>
            <div class="button-row">
                <?= view('components/button', ['label' => 'Primary', 'variant' => 'primary', 'link' => '#']) ?>
                <?= view('components/button', ['label' => 'Secondary', 'variant' => 'secondary', 'link' => '#']) ?>
                <?= view('components/button', ['label' => 'Border', 'variant' => 'bordered', 'link' => '#']) ?>
                <?= view('components/button', ['label' => 'Disabled', 'variant' => 'disabled']) ?>
            </div>
        </section>

        <!-- Cards -->
        <section>
            <h2>Card Sample</h2>
            <div class="cards">
                <?= view('components/card', [
                    'title' => 'Artworks include multiple original works and fanart of multiple different franchises.',
                    'description' => 'Artworks'
                ]) ?>
                <?= view('components/card', [
                    'title' => 'Commission Info:',
                    'description' => 'Type of artwork, price, quantity.'
                ]) ?>
                <?= view('components/card', [
                    'title' => '"Commission and give this artist all of your money now :3c."',
                    'description' => '— Adoring Fan'
                ]) ?>
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
    <?= view('components/footer'); ?>
</body>

</html>