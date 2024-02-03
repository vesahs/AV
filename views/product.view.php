<?php 
require './views/partials/productsHeader.php' ?>

<div class="main-content">
    <div class="page-title">
        <h2><?=  $product['title'] ?></h2>
    </div>
    <div class="row">
        <div class="product">
            <div class="image">
                <img src="<?= $product['image']?>" alt="<?= $product['image']?>" class="img">
            </div>
            <div class="description">
                <div class="title-price">
                    <div class="price-dashboard">
                        <p><b>Price:</b><?= $product['price']?> €</p>
                        
                        <?php if(isset($_SESSION['user']['username']) && $_SESSION['user']['role'] === 'admin') : ?>
                            <form method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                <button class="delete-button">DELETE</button>
                                <?php if(isset($_SESSION['user']['username']) && $_SESSION['user']['role'] === 'admin') :?>
                                    <a class="edit-button" href="/product-edit?id=<?= $product['id']?>">EDIT</a>
                                <?php endif;?>
                            </form>
                        <?php endif;?>
                    </div>
                </div>
                <div class="product-description"></div>
                <p><?= $product['decription']?></p>
            </div>
            
        </div>
    </div>
</div>

<?php require './views/partials/productsFooter.php' ?>