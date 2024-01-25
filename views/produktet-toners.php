<?php 
    require './controllers/Products.php';
    $productetToners = new Products();
    require './views/partials/productsHeader.php' ?>

<div class="main-content">
    <div class="page-title">
        <h2><?= $productetToners->pageTitle ?> </h2>
    </div>
    <div class="row">
        <?php foreach($productetToners->getProductsByCategory)?>
        <div class="product">
            <div class="image">
                <img src="" alt="TonerForOilySkin" class="img">
            </div>
            <div class="description">
                <div class="title-price">
                    <div class="title">
                        <h3>Toner For Oily Skin</h3>
                    </div>
                    <div class="price">
                        <p><b>Price:</b> 12€</p>
                    </div>
                </div>
                <div class="product-description"></div>
                <p>
                    This toner for oily skin helps to remove excess oil and visibly reduce the look of pores.
                    Formulated with micro-exfoliating lipo-hydroxy acid, this oily skin toner refines skin texture,
                    and unblocks and tightens pores.
                </p>
            </div>
        </div>
    </div>
</div>

<?php require './views/partials/productsFooter.php' ?>