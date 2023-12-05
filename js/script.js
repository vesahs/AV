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

let usernameRegex = /^[A-Za-z][a-z]{2,8}$/;
let passwordRegex = /^[A-Z][a-zA-Z0-9]$/;

function validateForm() {
    let usernameInput = document.getElementById('username');
    let usernameError = document.getElementById('usernameError');
    let passInput = document.getElementById('password');
    let passError = document.getElementById('passError');


    usernameError.innerText = '';
    passError.innerText = '';

    if (!usernameRegex.test(usernameInput.value)) {
        usernameError.innerText = 'Invalid username';
        return false;
    }

    if (!passwordRegex.test(passInput.value)) {
        passError.innerText = 'Invalid password';
        return false;
    }
    alert('Username and password was corect!');
}