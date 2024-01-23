<!DOCTYPE html>
<html lang="en">

<head>

    <title>Produktet-Body Care</title>
    <link rel="icon" type="image/x-icon" href="../resources/images/favicon.ico">
    <link rel="stylesheet" href="../style/products.css">
</head>

<body>
    <div class="header" id="products">
        <div class="menu">

            <button class="menu-toggle" aria-label="Toggle Menu">&#9776; Menu</button>
            <nav class="navbar">
                <div class="close-icon" aria-label="Close Menu">&#10006;</div>
                <a href="home.php"><img src="../resources/images/headerlogo.png" alt="logo" width="150px"></a>
                <ul>
                    <li class="<?= str_contains($_SERVER['REQUEST_URI'], 'home.php') ? 'li_active': '' ; ?>"><a href="home.php" id="home">Home</a></li>
                    <li class="<?= str_contains($_SERVER['REQUEST_URI'], 'about.php') ? 'li_active': '' ; ?>"><a href="about.php">About us</a></li>
                    <li class="<?= str_contains($_SERVER['REQUEST_URI'], 'produktet-moisturizers.php') ? 'li_active': '' ; ?>">
                        <a href="produktet-moisturizers.php">Products</a>
                        <ul>
                            <li class="<?= str_contains($_SERVER['REQUEST_URI'], 'produktet-moisturizers.php') ? 'li_active': '' ; ?>"><a href="produktet-moisturizers.php">Moisturizers</a></li>
                            <li class="<?= str_contains($_SERVER['REQUEST_URI'], 'produktet-toners.php') ? 'li_active': '' ; ?>"><a href="produktet-toners.php">Toners</a></li>
                            <li class="<?= str_contains($_SERVER['REQUEST_URI'], 'produktet-FaceWashes.php') ? 'li_active': '' ; ?>"><a href="produktet-FaceWashes.php">Face Washes</a></li>
                            <li class="<?= str_contains($_SERVER['REQUEST_URI'], 'produktet-Body.php') ? 'li_active': '' ; ?>"><a href="produktet-Body.php">Body Care</a></li>
                            <li class="<?= str_contains($_SERVER['REQUEST_URI'], 'produktet-sets.php') ? 'li_active': '' ; ?>"><a href="produktet-sets.php">Sets </a></li>
                            <li class="<?= str_contains($_SERVER['REQUEST_URI'], 'produktet-sunscreens.php') ? 'li_active': '' ; ?>"><a href="produktet-sunscreens.php">Sunscreen</a></li>
                        </ul>
                    </li>
                    <li><a href="home.php#contact" id="#contact">Contact us</a></li>
                </ul>
            </nav>
        </div>
    </div>