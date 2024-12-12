document.addEventListener("DOMContentLoaded", () => {
    // Load the cart from localStorage
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    const cartItemsContainer = document.querySelector('.cart-items');
    const totalPriceContainer = document.getElementById('total-price');

    // Function to display cart items
    function displayCartItems() {
        cartItemsContainer.innerHTML = ''; // Clear current items
        let total = 0;

        if (cart.length === 0) {
            cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
            totalPriceContainer.textContent = '₱0.00';
            return;
        }

        cart.forEach((item, index) => {
            const itemElement = document.createElement('div');
            itemElement.classList.add('cart-item');
            itemElement.innerHTML = `
                ${item.name} (${item.size}) x${item.quantity} - ₱${(item.price * item.quantity).toFixed(2)}
                <button class="remove-item" data-index="${index}">Remove</button>
            `;
            cartItemsContainer.appendChild(itemElement);

            total += item.price * item.quantity;
        });

        // Update total price
        totalPriceContainer.textContent = `₱${total.toFixed(2)}`;

        // Add functionality to remove items
        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', function () {
                const index = parseInt(this.getAttribute('data-index'));
                cart.splice(index, 1); // Remove item from cart
                localStorage.setItem('cart', JSON.stringify(cart)); // Update localStorage
                displayCartItems(); // Refresh the cart display
            });
        });
    }

    // Display cart items on page load
    displayCartItems();
});
