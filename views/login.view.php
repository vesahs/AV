<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../resources/images/favicon.ico">
    <link rel="stylesheet" href="./resources/style/styles.css">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <div class="wrapper">
            <form method="POST" >
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" id="username" included>
                    <div class="error-message" id="usernameError"></div>
                    <img class="icon" src="./resources/icons/1.png" alt="" width="25px">
                </div>
                <?php if(isset($errors['username'])) : ?>
                <div class="error">
                    <p class="p-errors"><?= $errors['username'] ?></p>
                </div>
                <?php endif; ?>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" id="password" included>
                    <div class="error-message" id="passError"></div>
                    <img class="icon" src="./resources/icons/2.png" alt="" width="25px">
                </div>
                <?php if(isset($errors['password'])) : ?>
                <div class="error">
                    <p class="p-errors"><?= $errors['password'] ?></p>
                </div>
                <?php endif; ?>
                <div class="remember-forgot">
                    <div class="label">
                        <p><input type="checkbox">Remember me</p>
                    </div>
                </div>

                <button type="submit" class="btn">Login</a></button>
            </form>
            <div class="register-link">
                    <div class="label">
                        <p>Don't have an account?</p>
                    </div>
                    <div class="link">
                        <a href="regjistrohu">Regjistrohu</a>
                    </div>
                </div>
        </div>
    </div>

    <script src="./resources/js/script.js">

    </script>
</body>

</html>