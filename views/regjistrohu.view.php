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
            <form method="POST" onsubmit="return validateForm()">
                <h1>Sign Up</h1>
                <div class="input-box">
                    <input value="<?= isset($user) ? $user['username'] : '' ?>" name="username" placeholder="Username" id="username">
                    <div class="error-message" id="usernameError"></div>
                    <img class="icon" src="./resources/icons/1.png" alt="" width="25px">
                </div>
                <?php if(isset($errors['username'])) : ?>
                <div class="error">
                    <p class="p-errors"><?= $errors['username'] ?></p>
                </div>
                <?php endif; ?>
                <div class="input-box">
                    <input value="<?= isset($user) ? $user['password'] : '' ?>" type="password" name="password" placeholder="Password" id="password">
                    <div class="error-message" id="passError"></div>
                    <img class="icon" src="./resources/icons/2.png" alt="" width="25px">
                </div>
                <?php if(isset($errors['password'])) : ?>
                <div class="error">
                    <p class="p-errors"><?= $errors['password'] ?></p>
                </div>
                <?php endif; ?>
                <div class="input-box">
                    <input value="<?= isset($user) ? $user['email'] : '' ?>" name="email" placeholder="Email" id="email">
                    <div class="error-message" id="emailError"></div>
                    <img class="icon" src="./resources/icons/3.png" alt="" width="25px">
                </div>
                <?php if(isset($errors['email'])) : ?>
                <div class="error">
                    <p class="p-errors"><?= $errors['email'] ?></p>
                </div>
                <?php endif; ?>
                <div class="input-box">
                    <input value="<?= isset($user) ? $user['phone'] : '' ?>" name="phone" placeholder="Phone number" id="phone">
                    <div class="error-message" id="phoneError"></div>
                    <img class="icon" src="./resources/icons/4.png" alt="" width="25px">
                </div>
                <?php if(isset($errors['phone'])) : ?>
                <div class="error">
                    <p class="p-errors"><?= $errors['phone'] ?></p>
                </div>
                <?php endif; ?>
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

    <script src="../resources/js/script.js"></script>
</body>

</html>