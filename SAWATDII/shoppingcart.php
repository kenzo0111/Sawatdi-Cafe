<?php
// PHP code here (if any)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles/shoppingcart.css">
    <link rel="stylesheet" href="styles/header-navbar.css">
</head>
<body>
    
    <!-- Top Header Section -->
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
    
    <!-- Main Header and Navbar Section -->
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
    
    <!-- Shopping Cart Section -->
    <div class="container">
        <h1>Your Shopping Cart</h1>

        <!-- Cart Items (Empty for now, dynamic content will be inserted here) -->
        <div class="cart-items">
            <!-- Cart items will appear here dynamically -->
        </div>

        <h3>Total Price: <span id="total-price">₱0.00</span></h3>
        <button class="review-order"><a href="revieworder.php">Review Your Order</a></button>
    </div>

    <!-- Scripts -->
    <script src="js/shoppingcart.js"></script>
    <script src="js/index.js"></script>

</body>
</html>
