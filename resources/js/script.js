document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navbar = document.querySelector('.navbar');
    const closeIcon = document.querySelector('.close-icon');

    menuToggle.addEventListener('click', function () {
        document.body.classList.toggle('menu-open');
    });

    closeIcon.addEventListener('click', function () {
        document.body.classList.remove('menu-open');
    });

    navbar.addEventListener('click', function () {
        document.body.classList.remove('menu-open');
    });
});

let usernameRegex = /^[A-Za-z.-_][a-z]{2,8}$/;
let emailRegex = /^[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
let passwordRegex = /^[a-zA-Z0-9]+$/;
let phoneRegex = /^[0-9]{0,14}$/;

function validateForm() {
    let usernameInput = document.getElementById('username');
    let usernameError = document.getElementById('usernameError');
    let emailInput = document.getElementById('email');
    let emailError = document.getElementById('emailError');
    let passInput = document.getElementById('password');
    let passError = document.getElementById('passError');
    let phoneInput = document.getElementById('phone');
    let phoneError = document.getElementById('phoneError');

    usernameError.innerText = '';
    emailError.innerText = '';
    passError.innerText = '';
    phoneError.innerText = '';

    if (!usernameRegex.test(usernameInput.value)) {
        usernameError.innerText = 'Invalid username';
        return false;
    }

    if (!emailRegex.test(emailInput.value)) {
        emailError.innerText = 'Invalid email';
        return false;
    }

    if (!passwordRegex.test(passInput.value)) {
        passError.innerText = 'Invalid password';
        return false;
    }
    if (!phoneRegex.test(phoneInput.value)) {
        phoneError.innerText = 'Invalid phone number';
        return false;
    }

    alert('Name and email was corect!');
}