<?php  require './views/partials/header.php' ?>

<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('resources/images/BEIGE.png');">
                <div class="overlay">
                    <h3><?= $content['firstSectionFirstTitle'] ?></h3>
                    <span><?= $content['firstSectionFirstSpan'] ?></span>
                    <p class="white-text"><?= $content['firstSectionFirstParagraph'] ?></p>
                    <a href="produktet-moisturizers" class="btn">Products</a>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('resources/images/BEIGE2.png');">
                <div class="overlay">
                    <h3><?= $content['firstSectionSecondTitle'] ?></h3>
                    <span><?= $content['firstSectionSecondSpan'] ?></span>
                    <p class="white-text"><?= $content['firstSectionSecondParagraph'] ?></p>
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
            <h3><?= $content['sectionTwoFirstTitle'] ?></h3>
            <p><?= $content['sectionTwoFirstParagraph'] ?></p>
        </div>
        <div class="column">
            <img src="./resources/icons/flagrance.png" alt="flagrancefree" width="120px">
            <h3><?= $content['sectionTwoSecondTitle'] ?></h3>
            <p><?= $content['sectionTwoSecondParagraph'] ?></p>
        </div>
        <div class="column">
            <img src="./resources/icons/allergy.png" alt="allergy" width="120px">
            <h3><?= $content['sectionTwoThirdTitle'] ?></h3>
            <p><?= $content['sectionTwoThirdParagraph'] ?></p>
        </div>
        <div class="column">
            <img src="./resources/icons/paraben.png" alt="paraben" width="120px">
            <h3><?= $content['sectionTwoFourthTitle'] ?></h3>
            <p><?= $content['sectionTwoFourthParagraph'] ?></p>
        </div>
    </div>
    
    
    <section class="newproduct">
        <div class="thumbnail">
            <div class="overlay">
                <p class="new"><?= $content['sectionThreeFirstParagraph'] ?></p>
                <h3><?= $content['sectionThreeFirstTitle'] ?></h3>
                <span><?= $content['sectionThreeFirstSpan'] ?></span>
                <p class="white-text"><?= $content['sectionThreeSecondParagraph'] ?>
                </p>
                <p class="icon-p"><img class="icon" src="./resources/icons/smooth.png" alt="" width="45px"><?= $content['sectionThreeThirdParagraph'] ?>
                </p>
                <p class="icon-p"><img class="icon" src="./resources/icons/vegan.png" alt="" width="45px"><?= $content['sectionThreeFourthParagraph'] ?></p>
                <p class="icon-p"><img class="icon" src="./resources/icons/paraben2.png" alt="" width="45px"><?= $content['sectionThreeFifthParagraph'] ?>
                </p>
                <p class="icon-p"><img class="icon" src="./resources/icons/sulfate.png" alt="" width="45px"><?= $content['sectionThreeSixthParagraph'] ?></p>
                <a href="produktet-moisturizers" class="btn">View all</a>
            </div>
        </div>
    </section>


<?php require './views/partials/contact.php' ?>
<?php require './views/partials/footer.php' ?>