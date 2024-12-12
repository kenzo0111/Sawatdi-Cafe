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
        <nav>
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
            <!-- Example Menu Item -->
            <div class="menu-item">
                <img src="products/creamcheeseauth.jpg" alt="Cream Cheese Authentic Thai Milk Tea">
                <div class="menu-details">
                    <h3>Cream Cheese Authentic Thai Milk Tea</h3>
                    <p>Rich Thai milk tea topped with a smooth and savory cream cheese foam for an indulgent twist.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Cream Cheese Authentic Thai Milk Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱138</option>
                        <option value="Platter" data-price="488">Large - ₱158</option>
                        <option value="Platter" data-price="488">XLarge - ₱198</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="menu-item">
                <img src="products/creamcheesemilktea.jpg" alt="Cream Cheese Thai Pink Milk Tea">
                <div class="menu-details">
                    <h3>Cream Cheese Thai Pink Milk Tea</h3>
                    <p>Sweet and creamy Thai pink milk elevated with a luscious cream cheese topping.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Cream Cheese Thai Pink Milk Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱148</option>
                        <option value="Platter" data-price="488">Large - ₱168</option>
                        <option value="Platter" data-price="488">XLarge - ₱208</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="menu-item">
                <img src="products/creamcheeseoreomilktea.jpg" alt="Cream Cheese Oreo Milk Tea">
                <div class="menu-details">
                    <h3>Cream Cheese Oreo Milk Tea</h3>
                    <p>A decadent mix of Oreo crumbs and creamy milk tea, crowned with velvety cream cheese foam.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Cream Cheese Oreo Milk Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱148</option>
                        <option value="Platter" data-price="488">Large - ₱168</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="menu-item">
                <img src="products/lemonzestthaitea.jpg" alt="Lemon Zest Thai Tea">
                <div class="menu-details">
                    <h3>Lemon Zest Thai Tea</h3>
                    <p>Classic Thai tea infused with a zesty hint of lemon for a refreshing citrus kick.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Lemon Zest Thai Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱108</option>
                        <option value="Platter" data-price="488">Large - ₱128</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="menu-item">
                <img src="products/lemonzestthaijasminegreentea.jpg" alt="Lemon Zest Thai Jasmine Green Tea">
                <div class="menu-details">
                    <h3>Lemon Zest Thai Jasmine Green Tea</h3>
                    <p>Fragrant jasmine green tea brightened with a splash of fresh lemon zest for a light and invigorating drink.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Lemon Zest Thai Jasmine Green Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱108</option>
                        <option value="Platter" data-price="488">Large - ₱128</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="menu-item">
                <img src="products/thaiicedcoffee.jpg" alt="Thai Iced Coffee">
                <div class="menu-details">
                    <h3>Thai Iced Coffee</h3>
                    <p>Bold Thai coffee brewed to perfection and mixed with sweetened condensed milk over ice.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Thai Iced Coffee">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱108</option>
                        <option value="Platter" data-price="488">Large - ₱128</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="menu-item">
                <img src="products/organicmatchamilktea.jpg" alt="Organic Matcha Milk Tea">
                <div class="menu-details">
                    <h3>Organic Matcha Milk Tea</h3>
                    <p>Earthy organic matcha blended with creamy milk for a wholesome and energizing tea experience.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="Organic Matcha Milk Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱108</option>
                        <option value="Platter" data-price="488">Large - ₱128</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="menu-item">
                <img src="products/HKstylemilktea.jpg" alt="HK Style Milk Tea">
                <div class="menu-details">
                    <h3>HK Style Milk Tea</h3>
                    <p>A rich and robust Hong Kong-style milk tea made with a blend of strong black tea and creamy milk.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="HK Style Milk Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱108</option>
                        <option value="Platter" data-price="488">Large - ₱128</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <img src="products/caramelmacchiato.jpg" alt="HK Style Milk Tea">
                <div class="menu-details">
                    <h3>Caramel Macchiato</h3>
                    <p>Espresso layered with steamed milk, a touch of vanilla, and a drizzle of sweet caramel.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="HK Style Milk Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱108</option>
                        <option value="Platter" data-price="488">Large - ₱128</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <img src="products/vietnameseicedcoffee.jpg" alt="Matcha Latte">
                <div class="menu-details">
                    <h3>Vietnamese Iced Coffee</h3>
                    <p>Strong and bold Vietnamese coffee sweetened with condensed milk and served over ice.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="HK Style Milk Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱108</option>
                        <option value="Platter" data-price="488">Large - ₱128</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <img src="products/icedamericano.jpg" alt="Matcha Latte">
                <div class="menu-details">
                    <h3>Iced Americano</h3>
                    <p>A smooth and refreshing iced coffee made with rich espresso and chilled water.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="HK Style Milk Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱108</option>
                        <option value="Platter" data-price="488">Large - ₱128</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <img src="products/saltedcaramelfrappe.jpg" alt="Matcha Latte">
                <div class="menu-details">
                    <h3>Salted Caramel Frappe</h3>
                    <p>A creamy frappe with the perfect blend of sweet caramel and a hint of sea salt.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="HK Style Milk Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱108</option>
                        <option value="Platter" data-price="488">Large - ₱128</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <img src="products/matchafrappe.jpg" alt="Matcha Latte">
                <div class="menu-details">
                    <h3>Matcha Frappe</h3>
                    <p>TA chilled and creamy drink featuring the earthy flavors of premium matcha.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="HK Style Milk Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱108</option>
                        <option value="Platter" data-price="488">Large - ₱128</option>
                    </select>
                    <div class="price-add">
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <img src="products/javachipfrappe.jpg" alt="Matcha Latte">
                <div class="menu-details">
                    <h3>Java Chip Frappe</h3>
                    <p>A rich coffee frappe blended with chocolate chips and topped with whipped cream for a delightful crunch.</p>
                    <label for="size">Size:</label>
                    <select class="size-select" data-item="HK Style Milk Tea">
                        <option value="">Select Size</option>
                        <option value="Solo" data-price="178">Medium - ₱108</option>
                        <option value="Platter" data-price="488">Large - ₱128</option>
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
</body>
</html>
