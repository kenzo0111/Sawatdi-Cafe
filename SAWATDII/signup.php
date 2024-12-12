<?php
@include 'config.php'; // Include the database configuration file

$error = []; // Initialize error array

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm-password']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Invalid email format!';
    }

    // Check if the email already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error[] = 'User already exists with this email!';
    } elseif ($password !== $confirm_password) {
        $error[] = 'Passwords do not match!';
    } elseif (strlen($password) < 8) {
        $error[] = 'Password must be at least 8 characters long!';
    } else {
        // Hash the password and insert into database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the insert query and bind parameters
        $insert_stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        
        if ($insert_stmt) {
            $insert_stmt->bind_param("sss", $username, $email, $hashed_password);
            if ($insert_stmt->execute()) {
                header('Location: login.php'); // Redirect to login page
                exit();
            } else {
                $error[] = 'Failed to register user! Please try again.';
            }
        } else {
            $error[] = 'Failed to prepare the insert query!';
        }
    }

    // Check if the prepared statement was initialized before calling close()
    if (isset($stmt)) {
        $stmt->close();
    }
    if (isset($insert_stmt)) {
        $insert_stmt->close();
    }
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sawatdii Cafe - Sign Up</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/login.css">
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

  <div class="login-container">
    <div class="login-card">
      <div class="login-header">
        <img src="photo/sawatdiilogo.png" alt="Logo" class="login-logo">
        <h2>Create Your Account</h2>
      </div>

      <?php if (!empty($error)) { ?>
        <div class="alert alert-danger">
          <?php foreach ($error as $err) { echo "<p>" . htmlspecialchars($err) . "</p>"; } ?>
        </div>
      <?php } ?>

      <form id="signup" class="login-form" method="POST" action="">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirm-password" class="form-control" placeholder="Confirm your password" required>
        </div>
        <button type="submit" name="submit" class="btn-login">Sign Up</button>
      </form>

      <div class="login-footer">
        <p>Already have an account? <a href="login.php">Log In</a></p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
  <script src="js/index.js"></script>
</body>
</html>
