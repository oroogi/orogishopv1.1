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

    <style>
            body {
        height: 2100px;
      }
    </style>
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
            <img class="product-image-detail" src="img/products/Top/man/jackets/Skeleton Hoddie Full Zip/Skeleton Hoddie Full Zip.jpg" alt="first-photo-dollar-jeans">
          </div>
        </div>
          <div class="product-right">
            <h2 class="product-details-title">Skeleton Hoddie Full Zip <span>(New)</span></h2>
            <div class="product-detail-rating">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half"></i>
              <p>(16 ratings)</p>
            </div>
            <span class="product-detail-price">30€</span>
            <div class="product-size">
              <button onclick="buttonClicked(this)">S</button>
              <button onclick="buttonClicked(this)">M</button>
              <button onclick="buttonClicked(this)">L</button>
              <button onclick="buttonClicked(this)">XL</button>
            </div>
            <div class="product-description-details-details">
              <p>Amazing full zip hooded jacket! This one-of-a-kind jacket combines bold elements and striking details to create a bold, characterful look.</p>
              <p>On the hood you will find an impressive stylized skull, which adds a touch of rebelliousness and mystery to your look, on the back of the jacket we feature a unique rib design, which creates a striking effect and highlights your individuality.</p>
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
            <img src="img/products/Top/man/jackets/Skeleton Hoddie Full Zip/Skeleton Hoddie Full Zip.jpg">
          </div>
          <div>
            <img src="img/products/Top/man/jackets/Skeleton Hoddie Full Zip/Skeleton Hoddie Full Zip1.jpg">
          </div>
          <div>
            <img src="img/products/Top/man/jackets/Skeleton Hoddie Full Zip/Skeleton Hoddie Full Zip2.jpg">
          </div>
          <div>
            <img src="img/products/Top/man/jackets/Skeleton Hoddie Full Zip/Skeleton Hoddie Full Zip3.jpg">
          </div>
          <div>
            <img src="img/products/Top/man/jackets/Skeleton Hoddie Full Zip/Skeleton Hoddie Full Zip4.jpg">
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
              <th class="subtitle-th">Shoulder</th>
              <th class="subtitle-th">Bust</th>
              <th class="subtitle-th">Length</th>
              <th class="subtitle-th">Sleeve</th>

            </tr>
            <tr>
              <th>S</th>
              <th>55</th>
              <th>110</th>
              <th>65</th>
              <th>55</th>
            </tr>
            <th>M</th>
            <th>57</th>
            <th>114</th>
            <th>66</th>
            <th>56</th>
          </tr>
            <tr>
              <th>L</th>
              <th>60</th>
              <th>118</th>
              <th>67.5</th>
              <th>57.5</th>
            </tr>
            <tr>
              <th>XL</th>
              <th>63</th>
              <th>122</th>
              <th>66</th>
              <th>59</th>
            </tr>
          </table>
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