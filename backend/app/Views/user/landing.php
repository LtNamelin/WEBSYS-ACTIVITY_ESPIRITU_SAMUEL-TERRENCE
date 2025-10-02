<?php
// landing.php
$title = "Landing Page";
?>
<!DOCTYPE html>
<html lang="en">

<?= view('components/head'); ?>
<?= view('components/styles'); ?>

<style>
    /* Carousel wrapper */
    .carousel-wrapper {
        max-width: 800px;
        margin: 2rem auto;
        position: relative;
    }

    /* Carousel container */
    .carousel {
        position: relative;
        width: 100%;
        height: 450px;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
    }

    .carousel img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: none;
        border-radius: 12px;
    }

    .carousel img.active {
        display: block;
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Navigation buttons OUTSIDE the carousel */
    .carousel-nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: absolute;
        top: 50%;
        left: -50px;
        /* fixed position */
        right: -50px;
        /* fixed position */
        transform: translateY(-50%);
        width: calc(100% + 100px);
        pointer-events: none;
    }

    .carousel-nav button {
        pointer-events: all;
        background-color: rgba(0, 0, 0, 0.5);
        border: none;
        color: white;
        font-size: 2rem;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 50%;
        transition: background 0.3s;
    }

    .carousel-nav button:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Indicators BELOW the carousel */
    .indicators {
        text-align: center;
        margin-top: 15px;
    }

    .indicators span {
        display: inline-block;
        height: 12px;
        width: 12px;
        margin: 0 5px;
        background-color: rgba(0, 0, 0, 0.3);
        border-radius: 50%;
        cursor: pointer;
        transition: background 0.3s;
    }

    .indicators span.active {
        background-color: #F55DC5;
    }

    .card.fixed-width {
        width: 400px;
        /* fixed width */
        margin: 2rem auto;
        /* center horizontally */
    }
</style>

<body>
    <?= view('components/header'); ?>

    <main>
        <h1>Welcome to LtNamelin's Art Portfolio!</h1>

        <!-- Carousel wrapper -->
        <div class="carousel-wrapper">
            <div class="carousel">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <img src="<?= ('images/sampleart' . $i . '.png') ?>" alt="Sample Artwork <?= $i ?>" class="<?= $i === 1 ? 'active' : '' ?>">
                <?php endfor; ?>
            </div>

            <!-- Navigation buttons -->
            <div class="carousel-nav">
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
            </div>

            <div class="indicators">
                <?php for ($i = 0; $i < 10; $i++): ?>
                    <span data-index="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>"></span>
                <?php endfor; ?>
            </div>
        </div>
    </main>

    <!-- Description Card -->
    <?php
    $content = <<<HTML
        <div style="text-align:center;">
            <img src="images/descicon.png" alt="Icon" 
                style="width: 120px; height: 120px; border-radius:50%; margin-bottom:15px; object-fit:cover;">
            <p>Hello there and welcome to my website!<br>
            My name is Namelin, a digital illustrator with years of experience and have skills in Character Design, Background Art, 3D art, and currently studying programming!<br><br>
            I have experience working on multiple different collaborative artistic projects with different artists and have done commissions for multiple clients over the years.</p>
            
            <p><br><br> Social Media:</p>
            <a href="https://x.com/LtNamelin" target="_blank" rel="noopener noreferrer">
                <img src="images/x_logo.png" alt="X Icon"
                    style="width: 60px; height: 60px; border-radius:50%; margin-bottom:15px; object-fit:cover;">
            </a>
        </div>
        HTML;

    $title = '';
    $description = '';
    $statusClass = 'fixed-width';
    echo view('components/card', compact('content', 'title', 'description', 'statusClass'));

    ?>


    <?= view('components/footer'); ?>

    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll(".carousel img");
        const totalSlides = slides.length;
        const indicators = document.querySelectorAll(".indicators span");

        const showSlide = (index) => {
            slides.forEach((slide, i) => {
                slide.classList.toggle("active", i === index);
                indicators[i].classList.toggle("active", i === index);
            });
            currentIndex = index;
        };

        // Auto play every 5 seconds
        let autoPlay = setInterval(() => {
            showSlide((currentIndex + 1) % totalSlides);
        }, 5000);

        // Next & Prev buttons
        document.querySelector(".next").addEventListener("click", () => {
            showSlide((currentIndex + 1) % totalSlides);
            resetAutoPlay();
        });

        document.querySelector(".prev").addEventListener("click", () => {
            showSlide((currentIndex - 1 + totalSlides) % totalSlides);
            resetAutoPlay();
        });

        // Indicators click
        indicators.forEach((dot, i) => {
            dot.addEventListener("click", () => {
                showSlide(i);
                resetAutoPlay();
            });
        });

        // Reset autoplay when user interacts
        function resetAutoPlay() {
            clearInterval(autoPlay);
            autoPlay = setInterval(() => {
                showSlide((currentIndex + 1) % totalSlides);
            }, 5000);
        }
    </script>
</body>

</html>