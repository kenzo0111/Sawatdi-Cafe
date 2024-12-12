<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sawatdii Cafe</title>
  <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet"> <!-- Box Icons CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/styles.css">
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
    <div class="order-online">
      <a href="reservation.php">RESERVATION</a>
    </div> 
    <button class="menu-toggle" id="menu-toggle">
        <span id="menu-icon" name="menu-alt-left">☰</span> <!-- Hamburger icon -->
    </button>
  </header>

  <main>
    <section class="hero" id="home">
      <h1>Your Perfect Escape<br>In Every Sip and Bite</h1>
      <p>Unwind with our handcrafted drinks and delicious bites, made just for you.</p>
      <div class="button-container">
        <a href="#suggested" class="check-whats-hot">CHECK WHAT'S HOT</a>
      </div>
    </section>
  </main>

  <section id="suggested" class="suggested-section">
    <h2>SUGGESTED FOR YOU</h2>
    <div class="product-carousel">
      <div class="product-card">
        <img src="photo/picture8.jpg" alt="Garlic Butter Pasta" class="product-image">
        <div class="product-info">
          <h3>Garlic Butter Pasta</h3>
          <p>A simple, savory pasta coated in rich garlic butter, offering a comforting, classic flavor.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="header-divider"></div>

  <footer>
    <div class="footer-container">
      <div class="footer-section about-us">
        <h3>About Us</h3>
        <p>Sawatdii Cafe is a vibrant dining spot that blends Thai flavors with Filipino flair, offering a unique fusion of Asian-inspired dishes. With a warm, inviting atmosphere, the cafe focuses on fresh, authentic ingredients to create flavorful experiences—from savory classics like Pad Thai and satay to signature fusion options. Located in Daet, Camarines Norte, Sawatdii Cafe aims to bring a taste of Thailand to the Philippines, making it a go-to for locals and travelers seeking a unique culinary experience.</p>
      </div>

      <div class="footer-section connect-us">
        <h3>Connect with Us</h3>
        <p>SAWATDII CAFE: Traders Road, Central Plaza Complex, Brgy. Log-on Daet, Camarines Norte</p>
        <p>TIME: 1PM-10PM</p>
      </div>

      <div class="footer-section contact-info">
        <h3>Contact Info</h3>
        <ul>
          <li>
            <img src="icons/facebook.png" alt="Facebook Logo" class="contact-logo">
            <a href="https://www.facebook.com/SawatdiiCafePH/">FACEBOOK PAGE - @sawatdii.cafe.daet</a>
          </li>
          <li>
            <img src="icons/instagram.png" alt="Instagram Logo" class="contact-logo">
            <a href="https://www.instagram.com/sawatdiicafe/">INSTAGRAM - @SAWATDIICAFE</a>
          </li>
          <li>
            <img src="icons/email.png" alt="Email Logo" class="contact-logo">
            <a href="mailto:welovesawatdiicafe@gmail.com">EMAIL - welovesawatdiicafe@gmail.com</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-credits">
      <p>&copy; 2024 Sawatdii Cafe. All Rights Reserved. | Developed by 2AM DeV</p>
    </div>
  </footer>

  <script src="js/index.js"></script>

</body>
</html>
