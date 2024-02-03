<?php 
require './views/partials/productsHeader.php' ?>

<div class="main-content">
    <div class="page-title">
        <h2><?=  $pageTitle ?></h2>
    </div>
    <div class="row">
        <?php foreach($products as $product) { ?>    
        <div class="product">
            <div class="image">
                <img src="<?= $product['image']?>" alt="<?= $product['image']?>" class="img">
            </div>
            <div class="description">
                <div class="title-price">
                    <div class="title">
                        <h3><a href="/product?id=<?= $product['id'] ?>"><?= $product['title']?></a></h3>
                    </div>
                    <div class="price">
                        <p><b>Price:</b><?= $product['price']?> €</p>
                    </div>
                    <?php if(isset($product['discountprice'])) :?>
                    <div class="price">
                        <p><b>Sales: </b><?= $product['discountprice']?> €</p>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="product-description"></div>
                <p><?= $product['decription']?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<?php require './views/partials/productsFooter.php' ?>