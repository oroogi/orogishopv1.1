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
            <img class="product-image-detail" src="img/products/back-dollar-jeans.webp" alt="first-photo-dollar-jeans">
          </div>
        </div>
          <div class="product-right">
            <h2 class="product-details-title">Bnfuck Streetwear Jeans <span>(New)</span></h2>
            <div class="product-detail-rating">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half"></i>
              <p>(11 ratings)</p>
            </div>
            <span class="product-detail-price">40€</span>
            <div class="product-size">
              <button onclick="buttonClicked(this)">S</button>
              <button onclick="buttonClicked(this)">M</button>
              <button onclick="buttonClicked(this)">L</button>
              <button onclick="buttonClicked(this)">XL</button>
            </div>
            <div class="product-description-details-details">
              <p>Made with high-quality materials, these pants are durable and designed to provide maximum all-day comfort and style. The pants' modern, sleek cut ensures a perfect fit for a looser fit.</p>
              <p>With glitter effects made of fabric printed on the front and back of the pants, it enhances your fashion.</p>
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
            <img src="img/products/back-dollar-jeans/j1.webp" alt="">
          </div>
          <div>
            <img src="img/products/back-dollar-jeans/j2.webp" alt="">
          </div>
          <div>
            <img src="img/products/back-dollar-jeans/j3.webp" alt="">
          </div>
          <div>
            <img src="img/products/back-dollar-jeans/j4.jpg" alt="">
          </div>
          <div>
            <img src="img/products/back-dollar-jeans/j5.jpg" alt="">
          </div>
        </div>
        <div class="product-description-details">
          <h3>Size Details</h3>
          <table>
            <tr>
              <th class="title-th">Unit cm</th>
            </tr>
            <tr>
              <th class="subtitle-th">Size</th>
              <th class="subtitle-th">Waist</th>
              <th class="subtitle-th">Lenght</th>
              <th class="subtitle-th">hip</th>

            </tr>
            <tr>
              <th>S</th>
              <th>80</th>
              <th>101</th>
              <th>104</th>
            </tr>
            <th>M</th>
            <th>84</th>
            <th>105</th>
            <th>105</th>
          </tr>
            <tr>
              <th>L</th>
              <th>88</th>
              <th>109</th>
              <th>106</th>
            </tr>
            <tr>
              <th>XL</th>
              <th>92</th>
              <th>113</th>
              <th>107</th>
            </tr>
          </table>
        </div>
    </div>

    <section class="new-products-details" id="new-products">
      <div class="shop-content-details">


        <div class="product-box">
          <img src="img/products/Homem-estrela.jpg_.webp" alt="" class="product-img">
          <h2 class="product-title">Kic Hoddie Full Zip</h2>
          <span class="price">35.98€</span>
          <i class="fa-solid fa-cart-plus add-cart"></i>
        </div>

        <div class="product-box">
          <img src="img/products/shiny-belt.webp" alt="" class="product-img">
          <h2 class="product-title">RHINESTONE belt</h2>
          <span class="price">35€</span>
          <i class="fa-solid fa-cart-plus add-cart"></i>
        </div>

        <div class="product-box">
          <img src="img/products/calças.png" alt="" class="product-img">
          <h2 class="product-title">orogi devil baggy pants</h2>
          <span class="price">40.25€</span>
          <i class="fa-solid fa-cart-plus add-cart"></i>
        </div>

        <div class="product-box">
          <img src="img/products/balaclava.png" alt="" class="product-img">
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