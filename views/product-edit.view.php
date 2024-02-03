<?php 
require './views/partials/productsHeader.php' ?>

<div class="main-content">
    <div class="page-title">
        <h2>Edit Product</h2>
    </div>
    <div class="row">
        <div class="product">
            <form method="POST" action="/product-edit">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                <div class="image">
                    <img src="<?= $product['image']?>" alt="<?= $product['image']?>" class="img">
                    <input type="hidden" name="image" value="<?= $product['image']?>">
                </div>
                <div class="description">
                <div class="title-price">
                    <div class="price-dashboard">
                        <input type="text" name="title" value="<?=  $product['title'] ?>">
                        <p><b>Price:</b><input type="text" name="price" value="<?= $product['price']?>"> €</p>
                        </form>
                    </div>
                </div>
                <div class="product-description"></div>
                <textarea name="decription" cols="60" rows="10"><?= $product['decription']?></textarea>
                <label for="category">Choose the product category:</label>
                <select name="category" id="category">
                    <option value="Moisturizers">Moisturizers</option>
                    <option value="Toners">Toners</option>
                    <option value="FaceWashes">FaceWashes</option>
                    <option value="BodyCare">BodyCare</option>
                    <option value="SkinCareSets">SkinCareSets</option>
                    <option value="Sunscreen">Sunscreen</option>
                </select>
                
                <button>SAVE<button>
            </form>
        </div>        
    </div>
</div>


<?php require './views/partials/productsFooter.php' ?>