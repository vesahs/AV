<?php 
require './views/partials/productsHeader.php' ?>

<div class="main-content">
    <div class="page-title">
        <h2>create product</h2>
    </div>
    <div class="row">
        <div class="product">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-create" >
                    <div class="input-box">    
                        <input type="file" accept="image/*" id="image" name="image" /><?= $product['image'] ?? '' ?>
                    </div>
                    <?php if(isset($errors['image'])) : ?>
                    <div class="error">
                        <p class="p-errors"><?= $errors['image'] ?></p>
                    </div>
                    <?php endif; ?>

                </div>
                <div class="form-create">
                        <div class="input-box">
                            <input placeholder="Title" name="title" value="<?= $product['title'] ?? '' ?>" type="text">
                        </div>
                        <?php if(isset($errors['title'])) : ?>
                            <div class="error">
                                <p class="p-errors"><?= $errors['title'] ?></p>
                            </div>
                        <?php endif; ?>

                        <div class="input-box">
                            <input placeholder="Price" name="price" value="<?= $product['price'] ?? '' ?>" type="text">€
                        </div>
                        <?php if(isset($errors['price'])) : ?>
                        <div class="error">
                            <p class="p-errors"><?= $errors['price'] ?></p>
                        </div>
                        <?php endif; ?>
                    <div class="input-box">
                        <textarea name="decription" placeholder="Decription" value="<?= $product['price'] ?? '' ?>" cols="60" rows="10"><?= $product['decription'] ?? '' ?><?= $product['price'] ?? '' ?></textarea>
                    </div>
                    <?php if(isset($errors['decription'])) : ?>
                        <div class="error">
                            <p class="p-errors"><?= $errors['decription'] ?></p>
                        </div>
                        <?php endif; ?>
                    <div class="input-box">
                        <label for="category">Choose the product category:</label>
                        <select name="category" id="category">
                            <option value="Moisturizers">Moisturizers</option>
                            <option value="Toners">Toners</option>
                            <option value="FaceWashes">FaceWashes</option>
                            <option value="BodyCare">BodyCare</option>
                            <option value="SkinCareSets">SkinCareSets</option>
                            <option value="Sunscreen">Sunscreen</option>
                        </select>
                        <?php if(isset($errors['category'])) : ?>
                            <p><?= $errors['category'] ?></p>
                        <?php endif; ?>
                    </div>    
                </div>
                <!-- <div class="button-create"> -->
                    <button class="button-create">Create</button>
                <!-- </div> -->
            </form>
        </div>
        
    </div>
</div>


<?php require './views/partials/productsFooter.php' ?>