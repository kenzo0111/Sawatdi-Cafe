document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    menuToggle.addEventListener("click", () => {
        navLinks.classList.toggle("active");
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const cartItems = document.querySelector(".cart-items");
    const totalPrice = document.getElementById("total-price");

    // Load cart from localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Function to display cart items and compute total price
    function displayCartItems() {
        cartItems.innerHTML = ''; // Clear previous cart items
        let total = 0;

        cart.forEach(item => {
            const cartItemElement = document.createElement("div");
            cartItemElement.classList.add("cart-item");
            cartItemElement.innerHTML = `
                ${item.name} (${item.size}) x${item.quantity} - ₱${(item.price * item.quantity).toFixed(2)}
            `;
            cartItems.appendChild(cartItemElement);
            total += item.price * item.quantity; // Compute the total price
        });

        // Display the total price
        totalPrice.textContent = total.toFixed(2);
    }

    // Display cart items and compute the total when the page loads
    displayCartItems();
});
