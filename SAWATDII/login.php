<?php
@include 'config.php'; // Including the database configuration

// Handle the login process when form is submitted
if (isset($_POST['submit'])) {

    // Get user input and sanitize it
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if the username and password match the admin credentials
    $admin_username = "kenzo"; // Set admin username
    $admin_password = "adminpassword"; // Set admin password (preferably hashed)

    // Query to check customer credentials
    $customer_query = "SELECT * FROM users WHERE username = '$username'";
    $customer_result = mysqli_query($conn, $customer_query);
    $customer = mysqli_fetch_assoc($customer_result);

    // Check if the input matches the admin credentials
    if ($username == $admin_username && password_verify($password, password_hash($admin_password, PASSWORD_DEFAULT))) {
        
        // If admin credentials match, start a session and set session variables
        session_start();
        $_SESSION['admin_name'] = $username;
        
        // Insert a record in the admin login log
        $log_sql = "INSERT INTO admin_login_logs (username) VALUES ('$username')";
        if (mysqli_query($conn, $log_sql)) {
            // Redirect to the admin dashboard
            header('Location: dashboard.php');
            exit();
        } else {
            // Error handling for failed log entry
            $error[] = 'Failed to record login time!';
        }

    // Check if customer credentials are valid
    } elseif ($customer && password_verify($password, $customer['password'])) {
        // If customer credentials match, start a session and set session variables
        session_start();
        $_SESSION['customer_name'] = $username;
        
        // Redirect to the main page
        header('Location: index.php');
        exit();
    } else {
        // If credentials do not match
        $error[] = 'Incorrect username or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sawatdii Cafe - Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
        </li>
        <li><a href="#promo">PROMO</a></li>
      </ul>
    </nav>
  </div>
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
        <h2>Welcome Back!</h2>
      </div>
      <form method="POST" class="login-form">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" name="submit" class="btn-login">Login</button>
      </form>

      <!-- Display errors if any -->
      <?php
      if (!empty($error)) {
          foreach ($error as $err) {
              echo '<div class="error-message">' . $err . '</div>';
          }
      }
      ?>

      <!-- Social Login Section Inside Container -->
      <div class="social-login">
        <p>Or login with</p>
        <div class="social-icons">
          <button onclick="handleSocialLogin('google')" class="social-btn google">
            <i class="fab fa-google"></i>
          </button>
        </div>
      </div>

      <div class="login-footer">
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
      </div>
    </div>
  </div>

  <script src="js/login.js"></script>
  <script src="js/index.js"></script>
  <!-- Google API script -->
   <script src="https://apis.google.com/js/api:client.js"></script>

</body>
</html>
