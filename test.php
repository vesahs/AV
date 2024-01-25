<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="resources/style/styles.css">
</head>
<body>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('resources/images/BEIGE.png');">
                <div class="overlay">
                    <h3>Unlock your <br>skins radiance,</h3>
                    <span>naturally</span>
                    <p class="white-text">Unveiling the timeless elegance of<br>natural beauty, one skin at a time</p>
                    <a href="#" class="btn">Products</a>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('resources/images/BEIGE2.png');">
                <div class="overlay">
                    <h3>Embrace your <br>natural beauty</h3>
                    <span>through</span>
                    <p class="white-text">It's like giving your skin a daily dose <br>of pure nourishment and care.</p>
                    <a href="#" class="btn">Products</a>
                </div>
            </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    </div>


    <div class="columns">
        <div class="column">
            <img src="./resources/icons/natural.png" alt="natural" width="120px">
            <h3>Natural Ingredients</h3>
            <p>From soothing botanical extracts to nourishing oils, each
                ingredient is chosen for its skin loving properties</p>
        </div>
        <div class="column">
            <img src="./resources/icons/flagrance.png" alt="flagrancefree" width="120px">
            <h3>Flagrance Free</h3>
            <p>Enjoy skincare that is gentle and free from synthetic scents,
                perfect for even the most sensitive skin.</p>
        </div>
        <div class="column">
            <img src="./resources/icons/allergy.png" alt="allergy" width="120px">
            <h3>Allergy Tested</h3>
            <p>Our products ensure they are gentle for all skin types,
                giving you the confidence to embrace your beauty worry free.</p>
        </div>
        <div class="column">
            <img src="./resources/icons/paraben.png" alt="paraben" width="120px">
            <h3>Paraben Free</h3>
            <p>Your skin deserves only the best, which is why our products are free from parabens.
                We believe in clean, healthy skincare without compromise.</p>
        </div>
    </div>
    
    
    <section class="newproduct">
        <div class="thumbnail">
            <div class="overlay">
                <p class="new">NEWEST ARRIVAL</p>
                <h3>Deeply Nourishing<br>Serum For Glowing,</h3>
                <span>Healthy Skin</span>
                <p class="white-text">Our vegan serum is a cruelty free, plant powered
                    elixir designed to nurture your locks with the goodness of nature.
                    Say goodbye to harsh chemicals and hello to vibrant, luscious skin
                    that is as kind to the planet as it is to you.
                </p>
                <p class="icon-p"><img class="icon" src="./resources/icons/smooth.png" alt="" width="45px">Strong and Smooth
                </p>
                <p class="icon-p"><img class="icon" src="./resources/icons/vegan.png" alt="" width="45px">Purely Vegan</p>
                <p class="icon-p"><img class="icon" src="./resources/icons/paraben2.png" alt="" width="45px">Paraben free
                </p>
                <p class="icon-p"><img class="icon" src="./resources/icons/sulfate.png" alt="" width="45px">Sulfate free</p>
                <a href="#" class="btn">View all</a>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="resources/js/script.js"></script>

    
<?php require './views/partials/contact.php' ?>
<?php require './views/partials/footer.php' ?>
</body>
</html>
