document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('menu-btn');
    const navbar = document.querySelector('.header .navbar');

    menuBtn.addEventListener('click', function() {
        navbar.classList.toggle('active');
    });

    document.addEventListener('click', function(event) {
        if (!navbar.contains(event.target) && !menuBtn.contains(event.target)) {
            navbar.classList.remove('active');
        }
    });
});
