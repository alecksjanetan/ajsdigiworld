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

document.querySelectorAll(".collapsible-toggle").forEach(button => {
  button.addEventListener("click", () => {
    const content = button.nextElementSibling;

    // Toggle the display of the content
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
});