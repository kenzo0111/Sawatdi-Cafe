<?php
// You can add your PHP logic here, if any.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sawatdii Cafe - Menu</title>
    <link rel="stylesheet" href="styles/menu.css">
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
        <div class="logo">
            <!-- Optionally, you can add a logo here -->
        </div>
        <nav class="ml-auto">
            <ul class="nav-links">
                <li><a href="index.php">HOME</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li class="dropdown">
                    <a href="menu.php">MENU</a>
                    <ul class="dropdown-content">
                        <li><a href="pasta.php">Premium Pasta</a></li>
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
    <section class="search-bar">
        <input type="text" id="search-input" placeholder="Search for a product...">
        <button id="search-clear">✖</button>
        <button id="search-button">Search</button>
    </section>

    <main>
        <section class="menu-section">
            <!-- Example Menu Item -->
            <div class="menu-item">
                <img src="products/porkkatsusando.png" alt="Pork Katsu Sando">
                <div class="menu-details">
                    <h3>Pork Katsu Sando</h3>
                    <p>A crispy and juicy pork cutlet sandwich served with a tangy sauce and slaw.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Pork Katsu Sando">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Solo - ₱178</option>
                        <option value="Platter" data-price="488">Platter - ₱488</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
    
            <div class="menu-item">
                <img src="products/spirachatunasandwich.png" alt="Sriracha Tuna Sandwich">
                <div class="menu-details">
                    <h3>Sriracha Tuna Sandwich</h3>
                    <p>Spicy tuna with a creamy sriracha sauce served on soft bread for a bold flavor.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Sriracha Tuna Sandwich">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Solo - ₱178</option>
                        <option value="Platter" data-price="488">Platter - ₱488</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="menu-item">
                <img src="products/classicclubsandwich.png" alt="Classic Club Sandwich">
                <div class="menu-details">
                    <h3>Classic Club Sandwich</h3>
                    <p>A classic sandwich with layers of turkey, bacon, lettuce, and tomato.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Classic Club Sandwich">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Solo - ₱178</option>
                        <option value="Platter" data-price="488">Platter - ₱488</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
    
            <div class="menu-item">
                <img src="products/koreantoast.png" alt="Korean-Style Street Toast">
                <div class="menu-details">
                    <h3>Korean-Style Street Toast</h3>
                    <p>A popular street food featuring eggs, cheese, and veggies, all toasted to perfection.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Korean-Style Street Toast">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Solo - ₱178</option>
                        <option value="Platter" data-price="488">Platter - ₱488</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="menu-item">
                <img src="products/chickensando.png" alt="Chicken Katsu Sando">
                <div class="menu-details">
                    <h3>Chicken Katsu Sando</h3>
                    <p>A crispy chicken cutlet sandwich served with fresh vegetables and a savory sauce.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Chicken Katsu Sando">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Solo - ₱178</option>
                        <option value="Platter" data-price="488">Platter - ₱488</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
        </section>

        <aside class="cart">
            <h3>Your Order</h3>
            <div class="cart-items"></div>
            <div class="cart-summary">
                <p>Items: <span id="item-count">0</span></p>
                <p>Total: ₱<span id="total-price">0.00</span></p>
                <button class="review-order"><a href="revieworder.php" style="color: inherit; text-decoration: none;">Review Your Order</a></button>
            </div>
        </aside>
    </main>

    <script src="js/menu.js"></script>
    <script src="js/index.js"></script>
    <script src="js/menu-auth.js"></script>
</body>
</html>
