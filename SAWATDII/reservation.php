<?php
@include 'config.php'; // Including the database configuration

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and validate form inputs
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $date = mysqli_real_escape_string($conn, trim($_POST['date']));
    $time = mysqli_real_escape_string($conn, trim($_POST['time']));
    $guests = mysqli_real_escape_string($conn, trim($_POST['persons'])); // Matches 'persons' input
    $notes = mysqli_real_escape_string($conn, trim($_POST['request']));  // Matches 'request' input

    // Check if all required fields are filled
    if (empty($name) || empty($email) || empty($phone) || empty($date) || empty($time) || empty($guests)) {
        $error[] = 'Please fill in all required fields.';
    } else {
        // Insert query to save reservation
        $sql = "INSERT INTO reservations (name, email, phone, date, time, guests, notes)
                VALUES ('$name', '$email', '$phone', '$date', '$time', '$guests', '$notes')";

        if ($conn->query($sql) === TRUE) {
            $showConfirmation = true; // Flag to show confirmation message
        } else {
            $error[] = "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sawatdii Cafe</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/reservation.css">
  <link rel="stylesheet" href="styles/header-navbar.css">
  <script>
    function closeConfirmation() {
      document.getElementById('confirmationMessage').classList.add('hidden');
    }
  </script>
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
  </nav>
  </header>

  <section class="reservation-section">
    <div class="form-container">
      <h2>Be with us...</h2>
      <h1>Online Reservation</h1>
      <?php
      if (!empty($error)) {
          foreach ($error as $err) {
              echo "<div class='alert alert-danger'>$err</div>";
          }
      }
      ?>
      <form action="reservation.php" method="POST">
        <div class="form-grid">
          <!-- Name -->
          <div class="form-row">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
          </div>
          <!-- Email -->
          <div class="form-row">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Your Email Address" required>
          </div>
          <!-- Phone -->
          <div class="form-row">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" required>
          </div>
          <!-- Date of Reservation -->
          <div class="form-row">
            <label for="date">Date of Reservation:</label>
            <input type="date" id="date" name="date" required>
          </div>
          <!-- Time -->
          <div class="form-row">
            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>
          </div>
          <!-- Persons -->
          <div class="form-row">
            <label for="persons">Persons:</label>
            <input type="number" id="persons" name="persons" placeholder="Number of Persons" required>
          </div>
          <!-- Special Request -->
          <div class="form-row">
            <label for="request">Special Request:</label>
            <textarea id="request" name="request" rows="4" placeholder="Your special requests..."></textarea>
          </div>
        </div>
        <button type="submit" class="submit-btn">Submit Reservation</button>
      </form>

      <!-- Confirmation Message -->
      <?php if (isset($showConfirmation) && $showConfirmation): ?>
        <div id="confirmationMessage" class="confirmation-message">
          <div class="confirmation-content">
            <h2>Reservation Confirmed!</h2>
            <p>Thank you for your reservation. We'll send you a confirmation email shortly.</p>
            <button onclick="closeConfirmation()" class="close-btn">Close</button>
          </div>
  
          <script src="js/index.js"></script>
          <script src="js/reservation.js"></script>
        </div>
      <?php endif; ?>

    </div>
  </section>
  
</body>
</html>
