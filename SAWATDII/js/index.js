document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");
    const menuIcon = document.getElementById('menu-icon');

    // Check if all elements exist
    if (menuToggle && navLinks && menuIcon) {
        menuToggle.addEventListener("click", () => {
            // Toggle 'active' class to open and close the nav menu
            navLinks.classList.toggle("active");

            // Change the icon of the menu toggle (hamburger to cross)
            if (menuIcon.getAttribute('name') === 'menu-alt-left') {
                menuIcon.setAttribute('name', 'menu-alt-right'); // Change icon to close
            } else {
                menuIcon.setAttribute('name', 'menu-alt-left'); // Change icon back to open
            }
        });
    }
});
