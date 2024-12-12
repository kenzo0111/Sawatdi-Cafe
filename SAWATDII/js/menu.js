document.addEventListener("DOMContentLoaded", () => {
    const cartItems = document.querySelector(".cart-items");
    const itemCount = document.getElementById("item-count");
    const totalPrice = document.getElementById("total-price");

    let cart = [];

    document.querySelectorAll(".add-to-cart").forEach(button => {
        button.addEventListener("click", function () {
            const menuItem = this.closest(".menu-item");
            const itemName = menuItem.querySelector("h3").textContent;
            const sizeSelect = menuItem.querySelector(".size-select");
            const selectedSize = sizeSelect.options[sizeSelect.selectedIndex];
            const size = selectedSize.value;
            const price = parseFloat(selectedSize.getAttribute("data-price"));

            if (!size) {
                alert("Please select a size before adding to the cart.");
                return;
            }

            // Check if the item already exists in the cart and increase quantity
            const existingItem = cart.find(item => item.name === itemName && item.size === size);
            if (existingItem) {
                existingItem.quantity += 1;  // Increase quantity if the item is already in the cart
            } else {
                const cartItem = { name: itemName, size, price, quantity: 1 };
                cart.push(cartItem);
            }

            updateCartDisplay();
        });
    });

    function updateCartDisplay() {
        cartItems.innerHTML = ''; // Clear the cart display before updating
        let total = 0;
        let count = 0;
    
        cart.forEach((item, index) => {
            const cartItemElement = document.createElement("div");
            cartItemElement.classList.add("cart-item");
            cartItemElement.innerHTML = `
                ${item.name} (${item.size}) x${item.quantity} - ₱${(item.price * item.quantity).toFixed(2)}
                <button class="remove-item" data-index="${index}">Remove</button>
            `;
            cartItems.appendChild(cartItemElement);
            total += item.price * item.quantity;
            count += item.quantity;
        });
    
        itemCount.textContent = count;
        totalPrice.textContent = total.toFixed(2);
    
        // Save cart to localStorage
        localStorage.setItem('cart', JSON.stringify(cart));
    
        // Add remove item functionality
        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', function () {
                const itemIndex = parseInt(this.getAttribute('data-index')); // Get the index of the item to remove
                cart.splice(itemIndex, 1); // Remove the item from the cart
                updateCartDisplay(); // Update the cart display
            });
        });
    }
    

    // Search functionality
    document.getElementById('search-button').addEventListener('click', function () {
        const searchTerm = document.getElementById('search-input').value.toLowerCase();
        const menuItems = document.querySelectorAll('.menu-item');

        menuItems.forEach(item => {
            const title = item.querySelector('h3').textContent.toLowerCase();
            if (title.includes(searchTerm)) {
                item.style.display = 'block'; // Show item
            } else {
                item.style.display = 'none'; // Hide item
            }
        });
    });

    // Optional: Enable live search as user types
    document.getElementById('search-input').addEventListener('input', function () {
        const searchTerm = this.value.toLowerCase();
        const menuItems = document.querySelectorAll('.menu-item');

        menuItems.forEach(item => {
            const title = item.querySelector('h3').textContent.toLowerCase();
            if (title.includes(searchTerm)) {
                item.style.display = 'block'; // Show item
            } else {
                item.style.display = 'none'; // Hide item
            }
        });
    });

    // Clear search input functionality
    const searchInput = document.getElementById('search-input');
    const searchClear = document.getElementById('search-clear');

    searchInput.addEventListener('input', () => {
        searchClear.style.display = searchInput.value ? 'block' : 'none';
    });

    searchClear.addEventListener('click', () => {
        searchInput.value = '';
        searchClear.style.display = 'none';
        searchInput.focus(); // Refocus on the input after clearing
    });
});
