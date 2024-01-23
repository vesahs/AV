<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../resources/images/favicon.ico">
    <link rel="stylesheet" href="./style/styles.css">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <div class="wrapper">
            <form action="" method="get" onsubmit="return validateForm()">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" id="username" included>
                    <div class="error-message" id="usernameError"></div>
                    <img class="icon" src="./resources/icons/1.png" alt="" width="25px">
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" id="password" included>
                    <div class="error-message" id="passError"></div>
                    <img class="icon" src="./resources/icons/2.png" alt="" width="25px">
                </div>

                <div class="remember-forgot">
                    <div class="label">
                        <p><input type="checkbox">Remember me</p>
                    </div>
                </div>

                <button type="submit" class="btn"><a href="#">Login</a></button>

                <div class="register-link">
                    <div class="label">
                        <p>Don't have an account?</p>
                    </div>
                    <div class="link">
                        <a href="regjistrohu.php">Regjistrohu</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="./js/script.js">

    </script>
</body>

</html>