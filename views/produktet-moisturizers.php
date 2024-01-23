<?php
require './partials/productsHeader.php';
require "../controllers/Products.php";
$products = new ProductsController();
?>

<div class="main-content">
    <div class="page-title">
        <h2>Moisturizers</h2>
    </div>
    <div class="row">
        <?php foreach ($products->getAll() as $product) { ?>
            <div class="product">
                <div class="image">
                    <img src="<?= $product['image'] ?>" alt="<?= $product['title'] ?>" class="img">
                </div>
                <div class="description">
                    <div class="title-price">
                        <div class="title">
                            <h3>
                                <?= $product['title'] ?>
                            </h3>
                        </div>
                        <div class="price">
                            <p><b>Price:</b>
                                <?= $product['price'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="product-description"></div>
                    <p>
                        <?php echo $product['description'] ?>
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
<?php require './partials/productsFooter.php' ?>