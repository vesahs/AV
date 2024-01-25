<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./resources/images/favicon.ico">
    <link rel="stylesheet" href="./resources/style/styles.css">
    <title>Regjistrohu</title>
</head>

<body>

    <div class="signup">
        <div class="wrapper">
            <form action="" method="get" onsubmit="return validateForm()">
                <h1>Sign Up</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" id="username">
                    <div class="error-message" id="usernameError"></div>
                    <img class="icon" src="./resources/icons/1.png" alt="" width="25px">
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" id="password">
                    <div class="error-message" id="passError"></div>
                    <img class="icon" src="./resources/icons/2.png" alt="" width="25px">
                </div>

                <div class="input-box">
                    <input type="email" placeholder="Email" id="email">
                    <div class="error-message" id="emailError"></div>
                    <img class="icon" src="./resources/icons/3.png" alt="" width="25px">
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Phone number" id="phone">
                    <div class="error-message" id="phoneError"></div>
                    <img class="icon" src="./resources/icons/4.png" alt="" width="25px">
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <div class="register-link">
                    <div class="label">
                        <p>I have an account?</p>
                    </div>
                    <div class="link">
                        <a href="login">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>