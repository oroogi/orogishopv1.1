<?php
  session_start();
?>
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
<header>
      <div class="header">  
        <div class="left-middle-section">
          <div class="left-section">
          <div class="header-bars">
            <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
          </div>
          <a href="home.php">
            <img src="img/logo/orogishopicon.png" alt="orogi" class="header-orogiicon">
          </a>
        </div>
          <div class="middle-section">
            <div class="news-button-header">
              <a href="#">
                <button>News</button>
              </a>
            </div>
            <div class="fire-button-header">
              <a href="#">
                <button>Fire</button>
              </a>
            </div>
            <div class="mens-button-header">
              <a href="#">
                <button>Mens</button>
              </a>
            </div>
            <div class="womens-button-header">
              <a href="#">
                <button>Womens</button>
              </a>
            </div>
          </div>
        </div>
        
          <div class="right-section">

            <div class="search-bar">
              <input type="text" placeholder="Search.." name="searchBar" id="searchBar"> 
              <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
              <div class="s-bx1">
                <!-- <a href="">
                  <img src="img/products/back-dollar-jeans.webp" alt="">
                  <div class="content1">
                    <h4>BNFUCK Streetwear Jeans</h4>
                    <p>40€</p>
                  </div>
                </a> -->
              </div>
            </div>
            
            <button>
              <i class="fa-solid fa-cart-shopping" id="cart-icon"></i>
            </button>
            <button>
              <i class="fa-regular fa-heart"></i></button>
              
              <div class="dropdown-menu-user-container">
                <button id="dropdown-button">
                    <i class="fa-regular fa-user"></i>
                </button>
                <div id="dropdown-user-menu" class="dropdown-user-menu">
                  <div class="up-menu"></div>
                  <?php
                    if (isset($_SESSION["useruid"])) {
                      echo '<a href="Profile.php">Account<i class="fa-solid fa-user-large"></i></a>';
                      echo '<a href="#">Favorite<i class="fa-regular fa-heart"></i></a>';
                      echo '<a href="#">Cart<i class="fa-solid fa-cart-shopping" id="cart-icon"></i></a>';
                      echo '<a href="includes/logout.inc.php">Log out<i class="fa-solid fa-arrow-right-from-bracket"></i></a>';
                    } else {
                      echo '<a href="signup.php">Sign Up</a>';
                      echo '<a href="login.php">Log In</a>';
                      echo '<a href="login.php">Tiktok<i class="fa-brands fa-tiktok"></i></a>';
                      echo '<a href="login.php">Instagram<i class="fa-brands fa-instagram"></i></a>';
                    }
                  ?>
                </div>
              </div>

          </div> 
                  </div>

                  <!-- Cart Section -->

                  <div class="cart">
                    <h2 class="cart-title">You Cart</h2>
                    <div class="cart-content">

                        <div class="bottom-total">
                          <div class="total">
                            <div class="total-title">Total</div>
                            <div class="total-price">0€</div>
                          </div>
                          
                          <button type="button" class="btn-buy">Buy Now</button>
                      
                        </div>
                        <i class="fa-solid fa-xmark " id="close-cart"></i>
                  </div>
                </div>

          
          <!-- Dropdown Menu in Bars -->

          <div class="dropdown-menu-bars">
            <div class="drop-right-section">
              <a>
                <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
              </a>
              <a>
                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;" id="cart-icon"></i>
              </a>
              <a>
                <i class="fa-regular fa-heart" style="color: #ffffff;"></i>
              </a>
              <a>
                <i class="fa-regular fa-user" style="color: #ffffff;"></i></a>
            </div>  
            <div class="drop-middle-section">
              <div class="news-button-header">
                <a href="#">
                  <button>News</button>
                </a>
              </div>
              <div class="fire-button-header">
                <a href="#">
                  <button>Fire</button>
                </a>
              </div>
              <div class="mens-button-header">
                <a href="#">
                  <button>Mens</button>
                </a>
              </div>
              <div class="womens-button-header">
                <a href="#">
                  <button>Womens</button>
                </a>
              </div>
            </div>
          </div>
    </header>
    </body>