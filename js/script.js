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