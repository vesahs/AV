<!DOCTYPE html>
<html lang="en">

<head>
    <title>AV'S Skincare</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../resources/images/favicon.ico">
    <link rel="stylesheet" href="./style/styles.css">
</head>

<body>
    <div class="header">
        <div class="menu">
            <nav class="navbar">
                <div class="close-icon" aria-label="Close Menu">&#10006;</div>
                <a href="index.php"><img src="./resources/images/headerlogo.png" alt="logo" width="150px"></a>
                <ul>
                    <li class="<?= str_contains($_SERVER['REQUEST_URI'], 'index.php') ? 'li_active': '' ; ?>"><a href="index.php" id="home">Home</a></li>
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
                    <li><a href="index.php#contact" id="#contact">Contact us</a></li>
                </ul>
                <a href="login.php" class="btn">Log in</a>
            </nav>
        </div>
    </div>

    <button class="menu-toggle" aria-label="Toggle Menu">&#9776; Menu</button>