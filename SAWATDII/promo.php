<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Promo Section</title>
  <link rel="stylesheet" href="styles/promo.css">
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
      <a href="login.php">
        <img src="photo/profile.png" class="profile-logo" alt="Profile Logo">
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
  </nav>
  </header>


  <h1>Unwrap Our Latest Deals!</h1>
  <div class="promo-section" id="promo-section">
  </div>
  <div id="lightbox"></div>

  <script src="js/promo.js"></script>
  <script src="js/index.js"></script>
</body>
</html>
