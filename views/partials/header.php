<!DOCTYPE html>
<html lang="en">

<head>
    <title>AV'S Skincare</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./resources/images/favicon.ico">
    <link rel="stylesheet" href="./resources/style/styles.css">
</head>

<body>
    <div class="header">
        <div class="menu">
            <nav class="navbar">
                <div class="close-icon" aria-label="Close Menu">&#10006;</div>
                <a href="index"><img src="./resources/images/headerlogo.png" alt="logo" width="150px"></a>
                <ul>
                    <li class="<?= urlActive('index') ? 'li_active': '' ; ?>"><a href="index" id="home">Home</a></li>
                    <li class="<?= urlActive('about') ? 'li_active': '' ; ?>"><a href="about">About us</a></li>
                    <li class="<?= urlActive('produktet-moisturizers') ? 'li_active': '' ; ?>">
                        <a href="produktet-moisturizers">Products</a>
                        <ul>
                            <li class="<?= urlActive('produktet-moisturizers') ? 'li_active': '' ; ?>"><a href="produktet-moisturizers">Moisturizers</a></li>
                            <li class="<?= urlActive('produktet-toners') ? 'li_active': '' ; ?>"><a href="produktet-toners">Toners</a></li>
                            <li class="<?= urlActive('produktet-FaceWashes') ? 'li_active': '' ; ?>"><a href="produktet-FaceWashes">Face Washes</a></li>
                            <li class="<?= urlActive('produktet-Body') ? 'li_active': '' ; ?>"><a href="produktet-Body">Body Care</a></li>
                            <li class="<?= urlActive('produktet-sets') ? 'li_active': '' ; ?>"><a href="produktet-sets">Sets </a></li>
                            <li class="<?= urlActive('produktet-sunscreens') ? 'li_active': '' ; ?>"><a href="produktet-sunscreens">Sunscreen</a></li>
                        </ul>
                    </li>
                    <li><a href="index#contact" id="#contact">Contact us</a></li>
                    <li class="<?= urlActive('dashboard') ? 'li_active': '' ; ?>"><a href="dashboard" id="home">Dashboard</a></li>
                </ul>
                <a href="login" class="btn">Log in</a>
            </nav>
        </div>
    </div>

    <button class="menu-toggle" aria-label="Toggle Menu">&#9776; Menu</button>