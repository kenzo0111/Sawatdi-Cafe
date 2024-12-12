<?php
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
        <div class="logo"></div>
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
        <div class="order-online">
            <a href="reservation.php">RESERVATION</a>
        </div>
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
            <!-- Menu Items -->
            <div class="menu-item">
                <img src="products/garlicbutterpasta.png" alt="Garlic Butter Pasta">
                <div class="menu-details">
                    <h3>Garlic Butter Pasta with Herbed Chicken Fillet</h3>
                    <p>A fragrant, buttery pasta dish topped with perfectly seasoned herbed chicken fillet.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Garlic Butter Pasta">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="188">Solo - ₱188</option>
                        <option value="Platter" data-price="518">Platter - ₱518</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="menu-item">
                <img src="products/classicpadthai.png" alt="Classic Pad Thai">
                <div class="menu-details">
                    <h3>Classic Pad Thai</h3>
                    <p>A savory Thai-inspired noodle dish with tangy tamarind sauce, peanuts, and fresh toppings.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Classic Pad Thai">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="198">Solo - ₱198</option>
                        <option value="Platter" data-price="518">Platter - ₱518</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="menu-item">
                <img src="products/creamycarbonara.png" alt="Matcha Latte">
                <div class="menu-details">
                    <h3>Creamy Carbonara</h3>
                    <p>Indulgent and creamy, this pasta is loaded with a blend of three cheeses for ultimate satisfaction.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Three-Cheese Alfredo">
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
                <img src="products/tunapesto.png" alt="Matcha Latte">
                <div class="menu-details">
                    <h3>Tuna Pesto</h3>
                    <p>A fresh and flavorful combination of tuna and basil pesto tossed with al dente pasta.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Three-Cheese Alfredo">
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
                <img src="products/asianpasta.png" alt="Three Cheese Alfredo">
                <div class="menu-details">
                    <h3>Asian Pasta</h3>
                    <p>A fusion of vibrant Asian flavors, combining spices, herbs, and a light savory sauce.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Three-Cheese Alfredo">
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
                <img src="products/bakedmac.png" alt="Three Cheese Alfredo">
                <div class="menu-details">
                    <h3>Cheesy Baked Macaroni</h3>
                    <p>Comforting baked macaroni with layers of gooey cheese and a golden crust.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Three-Cheese Alfredo">
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
                <img src="products/threecheese.png" alt="Three Cheese Alfredo">
                <div class="menu-details">
                    <h3>Aglio Olio</h3>
                    <p>Simple yet flavorful, featuring garlic-infused olive oil, chili flakes, and al dente spaghetti.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Three-Cheese Alfredo">
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
                <button class="review-order">
                    <a href="revieworder.php" style="color: inherit; text-decoration: none;">Review Your Order</a>
                </button>
            </div>
        </aside>
    </main>

    <script src="js/menu.js"></script>
    <script src="js/index.js"></script>
    <script src="js/revieworder.js"></script>
</body>
</html>
