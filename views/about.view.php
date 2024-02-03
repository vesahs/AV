<?php require './views/partials/header.php' ?>

<div class="about" id="about">
    <div class="thumbnail">
        <div class="overlay">
            <h3><?= $content['sectionOneTitle'] ?></h3>
            <span><?= $content['sectionOneSpan'] ?></span>
            <p class="white-text"><?= $content['sectionOneParagraph'] ?></p>
            <a href="#" class="btn">Products</a>
        </div>
    </div>
</div>

<section class="about">
    <div class="newproduct">
        <div class="overlay">
            <div class="content">
                <div class="image">
                    <img src="../resources/images/aboutus.png" alt="Product Image">
                </div>
                <div class="text">
                    <p class="new"><?= $content['sectionTwoFirstParagraph'] ?></p>
                    <h3><?= $content['sectionTwoFirstTitle'] ?></h3>
                    <span><?= $content['sectionTwoFirstSpan'] ?></span>
                    <p class="white-text"><?= $content['sectionTwoBigParagraph'] ?></p>
                    <p class="black-text"><?= $content['workingHoursText'] ?></p>
                    <p class="white-text"><?= $content['workingHoursSet'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="newproduct">
        <div class="overlay">
            <div class="content">
                <div class="image-right">
                    <img src="../resources/images/product.png" alt="Product Image">
                </div>
                <div class="text">
                    <h3><?= $content['sectionThreeFirstTitle'] ?></h3>
                    <span><?= $content['sectionThreeFirstSpan'] ?></span>
                    <p class="white-text"><?= $content['sectionThreeFirstParagraph'] ?>
                    </p>
                    <p class="black-text"><?= $content['sectionThreeSecondParagraph'] ?></p>
                    <p class="white-text"><?= $content['sectionThreeThirdParagraph'] ?></p>
                    <p class="white-text"><?= $content['sectionThreeFourthParagraph'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require './views/partials/footer.php' ?>