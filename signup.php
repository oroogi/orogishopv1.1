<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orogi Shop</title>
    <link rel="icon" type="image/x-icon" href="img/logo/orogishoplilicon.png">

    <!-- Links -->
    <link rel="stylesheet" href="css/general/general.css">
    <link rel="stylesheet" href="css/general/header.css">
    <link rel="stylesheet" href="css/home/products.css">
    <link rel="stylesheet" href="css/general/profile/signup-login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fruktur&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>

    <!-- Header/Navbar -->
    <?php
      include_once 'geral/header.php';
    ?>

    <div class="new-products-title">
      <h2 class="section-title">Create Account</h2>
    </div>

    <section class="signup-form">
      <div class="signup-form-container">
        <form action="includes/signup.inc.php" method="post">
          <?php
            if (isset($_GET["error"])) {
              if ($_GET["error"] == "emptyinput") {
                echo "<div class='error-message-signup'<p>Fill in all fields!</p></div>";
              }
              if ($_GET["error"] == "invalidusername") {
                echo '<div class="error-message-signup"><p>Chose a proper username</p></div>';
              }
              if ($_GET["error"] == "invalidemail") {
                echo '<div class="error-message-signup"><p>Chose a proper email</p></div>';
              }
              if ($_GET["error"] == "passowrdsdontmatch") {
                echo '<div class="error-message-signup"><p>Passowrd doesnt match</p></div>';
              }
              if ($_GET["error"] == "stmtfailed") {
                echo '<div class="error-message-signup"><p>Something went wrong, try again</p></div>';
              }
              if ($_GET["error"] == "useralreadyexists") {
                echo '<div class="error-message-signup"><p>Your username or email has already exist</p></div>';
              }
              if ($_GET["error"] == "none") {
                echo "<div class='signup-sucess-done'><p>successfully signed up</p>
                <a class='back-home-signup' href='home.php'>◀ Back home</a></div>";
              }
            }
          ?>
          <div class="input-field">
            <label for="password">Full Name:</label>
            <input type="text" name="name" placeholder="Full Name" >
          </div>
          <div class="input-field">
            <label for="password">E-mail:</label>    
          <input type="text" name="email" placeholder="E-mail" >
          </div>
          <div class="input-field">
            <label for="password">username:</label>
            <input type="text" name="uid" placeholder="Username" >
          </div>
          <div class="input-field">
            <label for="password">Password:</label>
            <input type="password" name="pwd" placeholder="Passord" >
          </div>
          <div class="input-field">
            <label for="password">Repeat Password:</label>
            <input type="password" name="pwdrepeat" placeholder="Repeat Your Password" >
          </div>
          <div class="input-field-button">
            <button type="submit" name="submit" value="submit">Sign Up</button>
          </div>
        </form>
      </div>
    </section>

    <footer>
      <div class="footer-container">
        <div class="footer-left">
            <img src="img/logo/orogishopicon.png" alt="orogi icon">

          <div class="footer-social-media">
            <a href="#" class="footer-links">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#" class="footer-links">
              <i class="fa-brands fa-tiktok"></i>
            </a>
            <a href="#" class="footer-links twitter">
              <i class="fa-brands fa-twitter"></i>
            </a>
          </div>
        </div>

        <ul class="footer-list">
          <li>
            <h3>ABOUT US</h3>
          </li>
          <li>
            <a href="#">FAQ</a>
          </li>
          <li>
            <a href="#">History</a>
          </li>
          <li>
            <a href="#">Contanct</a>
          </li>
          <li>
            <a href="#">Privacy & Policy</a>
          </li>
          <li>
            <a href="#">Terms & Conditions</a>
          </li>
        </ul>

        <ul class="footer-list">
          <li>
            <h3>GET HELP</h3>
          </li>
          <li>
            <a href="#">Contact us</a>
          </li>
          <li>
            <a href="#">Return Policy</a>
          </li>
          <li>
            <a href="#">Returns</a>
          </li>
          <li>
            <a href="#">Shipping Information</a>
          </li>
          <li>
            <a href="#">Make Return</a>
          </li>
        </ul>
        <div class="copyright">
          <p>&copy; 2023 all rights reserved. designed by <span>orogi</span></p>
        </div>
        <div class="back-home">
          <a href="home.php">
            <p>◀ Back home</p>
          </a>
        </div>
      </div>
      
    </footer>

    <!-- Scripts -->
    <script src="script/general.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script/form.js"></script>
  </body>
</html>

