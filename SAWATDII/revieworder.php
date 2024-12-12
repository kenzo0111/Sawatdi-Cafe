<?php
$showConfirmation = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $showConfirmation = true; // Assume the order is placed successfully
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Order Page</title>
    <link rel="stylesheet" href="styles/revieworder.css">
    <link rel="stylesheet" href="styles/header-navbar.css">
</head>
<body>

    <div class="top-header">
        <div class="logo-container">
            <img src="photo/sawatdiilogo.png" class="top-logo" alt="Sawatdii Logo">
        </div>

        <div class="cart-container">
            <a href="shoppingcart.php">
                <img src="icons/cart.png" class="cart-logo" alt="Cart">
            </a>
        </div>

        <div class="profile-container">
            <a href="signup.php">
                <img src="photo/profile.png" class="profile-logo" alt="Profile">
            </a>
        </div>
    </div>

    <div class="header-divider"></div>

    <header>
        <div class="logo"></div>
        <nav class="ml-auto">
            <ul class="nav-links">
                <li><a href="index.php">HOME</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li class="dropdown">
                    <a href="menu.php">MENU</a>
                    <ul class="dropdown-content">
                        <li><a href="pasta.php">Pasta Spéciale</a></li>
                        <li><a href="drinks.php">Drinks</a></li>
                        <li><a href="sandwiches.php">Gourmet Sandwiches</a></li>
                    </ul>
                </li>
                <li><a href="promo.php">PROMO</a></li>
            </ul>
        </nav>
        <div class="order-online"><a href="reservation.php">RESERVATION</a></div>

        <button class="menu-toggle" id="menu-toggle">
            <span id="menu-icon" name="menu-alt-left">☰</span> <!-- Hamburger icon -->
        </button>
    </header>

    <div class="container">
        <h1>Review Your Order</h1>

        <div class="cart-items">
            <!-- Cart items will be added dynamically -->
        </div>

        <div class="total-summary">
            <p>Total: ₱<span id="total-price">0.00</span></p>
        </div>

        <div class="user-info">
            <h3>Your Information</h3>
            <label for="full-name">Full Name:</label>
            <input type="text" id="full-name" placeholder="Enter your full name">

            <label for="contact-no">Contact Number:</label>
            <input type="text" id="contact-no" placeholder="Enter your contact number">

            <label for="email">Email:</label>
            <input type="text" id="email" placeholder="Enter your email">

            <label for="address">Address (Daet, Camarines Norte):</label>
            <input type="text" id="address" value="Daet, Camarines Norte" disabled>

            <label for="barangay">Barangay:</label>
            <select id="barangay">
                <option value="Alawihao">Alawihao</option>
                <option value="Awitan">Awitan</option>
                <option value="Bagasbas">Bagasbas</option>
                <!-- Add more barangays as needed -->
            </select>

            <label for="additional-address">Additional Address Information:</label>
            <input type="text" id="additional-address" placeholder="e.g. Near the market">
        </div>

        <button id="place-order">Place Order</button>
    </div>

    <!-- Confirmation Message -->
    <?php if (isset($showConfirmation) && $showConfirmation): ?>
        <div id="confirmationMessage" class="confirmation-message">
            <div class="confirmation-content">
                <h2>Order Placed Successfully!</h2>
                <p>Thank you for your order. We'll send you a confirmation email shortly.</p>
                <button onclick="closeConfirmation()" class="close-btn">Close</button>
            </div>
        </div>
    <?php endif; ?>

    <script src="js/revieworder.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/index.js"></script>
</body>
</html>
