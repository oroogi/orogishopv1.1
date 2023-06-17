

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
    <link rel="stylesheet" href="css/general/profile/profile.css">

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
      <h2 class="section-title">ACCOUNT SETTINGS</h2>
    </div>

    <section class="profile-container">
      <div class="profile-div">
        <div class="profile-right">

        </div>
        <div class="profile-left">
          <label>
            <input type="checkbox" id="dark-mode-checkbox">
            <span class="check"></span>
          </label>
        </div>
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
  </body>
</html>