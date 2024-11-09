function toggleMenu() {
    const navMenu = document.querySelector('.nav-menu');
    navMenu.classList.toggle('active');
}

document.addEventListener('click', function(event) {
    const navMenu = document.querySelector('.nav-menu');
    const menuIcon = document.querySelector('.menu-icon');
    if (navMenu.classList.contains('active') && !navMenu.contains(event.target) && !menuIcon.contains(event.target)) {
        navMenu.classList.remove('active');
    }
});