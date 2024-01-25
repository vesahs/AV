<?php 
require './controllers/Products.php';
$productetFaceWashes = new Products();
require './views/partials/productsHeader.php' ?>

<div class="main-content">
    <div class="page-title">
        <h2><?= $productetFaceWashes->pageTitle ?></h2>
    </div>
    <div class="row">
        <?php foreach($productetFaceWashes->getProductsByCategory('FaceWashes') as $product) { ?>    
        <div class="product">
            <div class="image">
                <img src="<?= $product['image']?>" alt="<?= $product['image']?>" class="img">
            </div>
            <div class="description">
                <div class="title-price">
                    <div class="title">
                        <h3><?= $product['title']?></h3>
                    </div>
                    <div class="price">
                        <p><b>Price:</b><?= $product['price']?> €</p>
                    </div>
                </div>
                <div class="product-description"></div>
                <p><?= $product['decription']?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<?php require './views/partials/productsFooter.php' ?>