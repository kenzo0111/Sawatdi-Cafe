<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sawatdii Cafe</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/gallery.css">
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
  </div>

  <div class="header-divider"></div>

  <header>
    <div class="logo">
    </div>
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
            <li><a href="promo.php">PROMO</a></li>
        </li>
      </ul>
    </nav>
    <div class="order-online"><a href="reservation.php">RESERVATION</a></div>
    <button class="menu-toggle" id="menu-toggle">
        <span id="menu-icon" name="menu-alt-left">☰</span> <!-- Hamburger icon -->
    </button>
  </nav>
  </header>

  <section class="gallery-section">
    <div class="gallery">
      <div class="gallery-item small"><img src="photo/picture1.jpg" alt="Image 1"></div>
      <div class="gallery-item medium"><img src="photo/picture2.jpg" alt="Image 2"></div>
      <div class="gallery-item large"><img src="photo/picture3.jpg" alt="Image 3"></div>
      <div class="gallery-item medium"><img src="photo/picture4.jpg" alt="Image 4"></div>
      <div class="gallery-item small"><img src="photo/picture5.jpg" alt="Image 5"></div>
      <div class="gallery-item large"><img src="photo/picture6.jpg" alt="Image 6"></div>
      <div class="gallery-item small"><img src="photo/picture7.jpg" alt="Image 7"></div>
      <div class="gallery-item medium"><img src="photo/picture8.jpg" alt="Image 8"></div>
      <div class="gallery-item medium"><img src="photo/picture9.jpg" alt="Image 9"></div>
    </div>
  </section>

  <script src="js/gallery.js"></script>
  <script src="js/index.js"></script>
</body>
