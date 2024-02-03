document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navbar = document.querySelector('.navbar');
    const closeIcon = document.querySelector('.close-icon');

    if (menuToggle) {
        menuToggle.addEventListener('click', function () {
            document.body.classList.toggle('menu-open');
        });
    }

    if (closeIcon) {
        closeIcon.addEventListener('click', function () {
            document.body.classList.remove('menu-open');
        });
    }

    if (navbar) {
        navbar.addEventListener('click', function () {
            document.body.classList.remove('menu-open');
        });
    }
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

    if (phoneInput.value === '' || !phoneRegex.test(phoneInput.value)) {
        phoneError.innerText = 'Invalid phone number';
        return false;
    }

}

if (document.querySelector('.swiper-container')) {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        loop: true,
        effect: 'fade',
        speed: 1000,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}

