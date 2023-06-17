<!DOCTYPE html>
<html>
  or <a href="signup.php">Create account</a>
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
    <link rel="stylesheet" href="css/products/products-detail.css">

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

    <div class="product-details-container-box">
      <div class="product-details-container">
        <div class="product-left">
          <div class="product-details-img">
            <img class="product-image-detail" src="img/products/Acc/glasses/Sport Sunglasses/oculos-femininos.jpg" alt="first-photo-dollar-jeans">
          </div>
        </div>
          <div class="product-right">
            <h2 class="product-details-title">Sport Sunglasses <span>(New)</span></h2>
            <div class="product-detail-rating">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half"></i>
              <i class="fa-solid fa-star" style="color: rgb(190, 190, 190);"></i>
              <p>(3 ratings)</p>
            </div>
            <span class="product-detail-price">10€</span>
            <div class="product-description-details-details" style="margin-top: 20px;">
              <p>Sports glasses, perfect for style lovers! With a modern and functional design, these glasses provide exceptional style and performance.</p>
              <p>Available in several vibrant and stylish colors, you can choose the option that best suits your personal taste and matches your sporty style. From classic, understated tones to bold, eye-catching colors, we have a variety of options to suit every style.</p>
            </div>
            <div class="product-detail-buttons">
              <button type="button" class="product-detail-buynow">
                buy now
              </button>
              <button type="button" class="product-detail-addcart" id="product-detail-addcart">add to cart</button>
            </div>
          </div>
      </div>
      
        <div class="hover-container">
          <div>
            <img src="img/products/Acc/glasses/Sport Sunglasses/oculos-femininos.jpg">
          </div>
          <div>
            <img src="img/products/Acc/glasses/Sport Sunglasses/fg1.jpg">
          </div>
          <div>
            <img src="img/products/Acc/glasses/Sport Sunglasses/fg2.jpg">
          </div>
          <div>
            <img src="img/products/Acc/glasses/Sport Sunglasses/fg3.jpg">
          </div>
          <div>
            <img src="img/products/Acc/glasses/Sport Sunglasses/fg4.jpg">
          </div>
          <div>
            <img src="img/products/Acc/glasses/Sport Sunglasses/fg5.jpg">
          </div>
        </div>
        <div class="product-description-details">
          <h3>Size Details</h3>
          <img class="img-detail-description" src="img/products/Acc/glasses/Sport Sunglasses/detail.jpg" alt="">
        </div>
    </div>

    <section class="new-products-details" id="new-products">
      <div class="shop-content-details">


        <div class="product-box">
          <img src="img/products/Top/women/jackets/Devil Hoddie/diabo-red.webp" alt="" class="product-img">
          <h2 class="product-title">Devil Hoddie</h2>
          <span class="price">30€</span>
          <i class="fa-solid fa-cart-plus add-cart"></i>
        </div>

        <div class="product-box">
          <img src="img/products/Acc/belt/RHINESTONE belt/shiny-belt.webp" alt="" class="product-img">
          <h2 class="product-title">RHINESTONE belt</h2>
          <span class="price">35€</span>
          <i class="fa-solid fa-cart-plus add-cart"></i>
        </div>

        <div class="product-box">
          <img src="img/products/Acc/golves/orogi sensitive screen gloves/luvas.png" alt="" class="product-img">
          <h2 class="product-title">orogi sensitive screen gloves</h2>
          <span class="price">20.50€</span>
          <i class="fa-solid fa-cart-plus add-cart"></i>
        </div>

        <div class="product-box">
          <img src="img/products/Acc/mask/orogi balaclava behind the shadow/balaclava.png" alt="" class="product-img">
          <h2 class="product-title">orogi balaclava behind the shadow</h2>
          <span class="price">12€</span>
          <i class="fa-solid fa-cart-plus add-cart"></i>
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
    <script src="script/product-detail.js"></script>
  </body>
</html>