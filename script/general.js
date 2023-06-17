/*  Side Bar in Navbar   */
const headerBars = document.querySelector('.header-bars')
const headerBarsIcon = document.querySelector('.header-bars i')
const dropdownMenuBars = document.querySelector('.dropdown-menu-bars')

headerBars.onclick = function () {
  dropdownMenuBars.classList.toggle('open')
  const isOpen = dropdownMenuBars.classList.contains('open')

  headerBarsIcon.classList = isOpen
    ?'fa-solid fa-angle-down'
    :'fa-solid fa-bars'

}

document.addEventListener("DOMContentLoaded", function() {
  var button = document.getElementById("dropdown-button");
  var menu = document.getElementById("dropdown-user-menu");

  button.addEventListener("click", function(event) {
      event.stopPropagation(); 
      if (menu.style.display === "block") {
          menu.style.display = "none";
      } else {
          menu.style.display = "block";
      }
  });

  document.addEventListener("click", function(event) {
      if (event.target !== button && event.target !== menu) {
          menu.style.display = "none";
      }
  });
});



/*  Search bar */

let search = document.getElementById('searchBar');
let sBx1 = document.getElementsByClassName('s-bx1')[0];


window.addEventListener('load', ()=>{
  products.forEach(element => {
    const {image, title, price, url} = element ;

    let card = document.createElement('a');
    card.href = url;
    card.innerHTML = `
    <img src="${image}" alt="">
    <div class="content1">
        <h4>${title}</h4>
        <p>${price}</p>
    </div>`;
    sBx1.appendChild(card);
  });
});

search.addEventListener('keyup', ()=> {
  let filter =search.value.toUpperCase();
  let a = sBx1.getElementsByTagName('a');
  for (let i = 0; i < a.length; i++) {
    let b = a[i].getElementsByClassName('content1')[0];
    let c = b.getElementsByTagName('h4')[0];

    let TextValue = c.textContent || c.innerText;
    if (TextValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = '';
      sBx1.style.visibility = "visible";
      sBx1.style.opacity = 1;
    } else {
      a[i].style.display = 'none';
    }
    if (search.value == 0) {
      sBx1.style.visibility = "hidden";
      sBx1.style.opacity = 0;
    }
  }
});

/*  Cart  */ 
let cartIcon = document.querySelector('#cart-icon')
let cart = document.querySelector('.cart')
let closeCart = document.querySelector('#close-cart')

cartIcon.onclick = () =>{
  cart.classList.add("active");
};

closeCart.onclick = () =>{
  cart.classList.remove("active");
};

/*   Cart works  */

if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
}

/*  Function  */
function ready() {
  /* remove */  
  var removeCartButtons = document.getElementsByClassName("cart-remove");
  console.log(removeCartButtons);
  for (var i = 0; i < removeCartButtons.length; i++) {
    var button = removeCartButtons[i];
    button.addEventListener("click", removeCartItem);
  }
  var quantityInputs = document.getElementsByClassName("cart-quantity");
  for (var i = 0; i < quantityInputs.length; i++) {
    var input = quantityInputs[i];
    input.addEventListener('change', quantityChanged);
  }
  /*  Add to Cart   */
  var addCart = document.getElementsByClassName("add-cart");
  for (var i = 0; i < addCart.length; i++) {
    var button = addCart[i];
    button.addEventListener('click', addCartClicked);
  }
  document
  .getElementsByClassName("btn-buy")[0]
  .addEventListener('click', buyButtonClicked)

  loadCartItems()
}

/*  Cart Save Function  */
function loadCartItems() {
  var cartItems = localStorage.getItem('cartItems');
  if (cartItems) {
    cartItems = JSON.parse(cartItems);
    for (var i = 0; i < cartItems.length; i++) {
      var cartItem = cartItems[i];
      addProductToCart(cartItem.title, cartItem.price, cartItem.productImg);
    }
  }
  updatetotal();
}

function saveCartItems() {
  var cartBoxes = document.getElementsByClassName("cart-box");
  var cartItems = [];
  for (var i = 0; i < cartBoxes.length; i++) {
    var cartBox = cartBoxes[i];
    var title = cartBox.getElementsByClassName("cart-product-title")[0].innerText;
    var price = cartBox.getElementsByClassName("cart-price")[0].innerText;
    var productImg = cartBox.getElementsByClassName("cart-img")[0].src;
    cartItems.push({
      title: title,
      price: price,
      productImg: productImg
    });
  }
  localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

/*  Buy Button  */ 
function buyButtonClicked(){
  alert('Your Order Has Been Placed');
  var cartContent = document.getElementsByClassName('cart-content')[0];
  var cartBoxes = cartContent.getElementsByClassName('cart-box');
  var cartBoxCount = cartBoxes.length;
  for (var i = cartBoxCount - 1; i >= 0; i--) {
    var cartBox = cartBoxes[i];
    var buyButton = cartBox.getElementsByClassName('btn-buy')[0];
    if (!buyButton) {
      cartBox.remove();
    }
  }
  document.getElementsByClassName("total-price")[0].innerText = "0€";
  updatetotal();
}

/*  Quantity Change   */
function quantityChanged(event){
  var input = event.target;
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  }
  updatetotal();
}

/* Add Item To The Cart */
function addCartClicked(event) {
  var button = event.target;
  var shopProducts = button.parentElement;
  var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
  var price = shopProducts.getElementsByClassName("price")[0].innerText;
  var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
  addProductToCart(title, price, productImg);
  updatetotal();
}

function addProductToCart(title, price, productImg) {
  var cartItems = document.getElementsByClassName("cart-content")[0];
  var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
  
  for (var i = 0; i < cartItemsNames.length; i++) {
    if (cartItemsNames[i].innerText === title) {
      alert("This product is already added to cart");
      return;
    }
  }

  var cartShopBox = document.createElement('div');
  cartShopBox.classList.add('cart-box');
  
  var cartBoxContent = `
    <img src="${productImg}" alt="" class="cart-img">
    <div class="detail-box">
      <div class="cart-product-title">${title}</div>
      <div class="cart-price">${price}</div>
      <input type="number" value="1" class="cart-quantity">
    </div>
    <i class="fa-solid fa-trash cart-remove"></i>
  `;

  cartShopBox.innerHTML = cartBoxContent;
  cartItems.append(cartShopBox);

  cartShopBox
    .getElementsByClassName("cart-remove")[0]
    .addEventListener('click', function() {
      removeCartItem(event);
      saveCartItems();
    });

  cartShopBox
    .getElementsByClassName("cart-quantity")[0]
    .addEventListener('change', function() {
      quantityChanged(event);
      saveCartItems();
    });

    saveCartItems();
}


/* remove item from cart the function */
function removeCartItem(event) {
  var buttonClicked = event.target;
  buttonClicked.parentElement.remove();
  updatetotal();
  saveCartItems();
}

/* Total */
function updatetotal() {
  var cartContent = document.getElementsByClassName("cart-content")[0];
  var cartBoxes = cartContent.getElementsByClassName("cart-box");
  var total = 0;
  for (var i = 0; i < cartBoxes.length; i++) {
    var cartBox = cartBoxes[i];
    var priceElement = cartBox.getElementsByClassName("cart-price")[0];
    var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
    var price = parseFloat(priceElement.innerText.replace("€", ""));
    var quantity = parseInt(quantityElement.value); // Converter para número
    total += price * quantity;
  }
  document.getElementsByClassName("total-price")[0].innerText = total.toFixed(2) + '€';
}

/*  Dark Mode  */

document.addEventListener('DOMContentLoaded', function() {
  var input = document.getElementById('dark-mode-checkbox');
  var body = document.querySelector('body');
  var isBlack = localStorage.getItem('isBlack') === 'true';

  updateBackgroundColor();

  input.addEventListener('click', function() {
    isBlack = !isBlack;
    localStorage.setItem('isBlack', isBlack);
    updateBackgroundColor();
  });

  function updateBackgroundColor() {
    if (isBlack) {
      body.style.backgroundColor = 'rgb(24, 24, 27)';
      document.querySelectorAll('.price, .product-title').forEach(function(element) {
        element.style.color = 'white';
      });
      document.querySelectorAll('.product-size button').forEach(function(button) {
        button.style.color = 'white';
      });
      document.querySelectorAll('.product-size button').forEach(function(element) {
        element.style.backgroundColor = "rgb(140, 140, 140)";
      });
      document.querySelectorAll('.product-description-details-details').forEach(function(element) {
        element.style.color = 'white';
      });
      document.querySelectorAll('.product-detail-price').forEach(function(element) {
        element.style.color = 'white';
        element.style.fontWeight = 'lighter';
      });
      document.querySelectorAll('.product-details-title').forEach(function(element) {
        element.style.color = 'white';
      });
      document.querySelectorAll('.product-detail-rating').forEach(function(element) {
        element.style.color = 'white';
      });
      document.querySelectorAll('.product-detail-rating').forEach(function(element) {
        element.style.backgroundColor = "rgb(140, 140, 140)";
      });
      document.querySelectorAll('.product-description-details').forEach(function(element) {
        element.style.color = 'white';
      });
      document.querySelectorAll('.product-description-details .subtitle-th').forEach(function(element) {
        element.style.backgroundColor = 'rgb(106, 106, 106)';
      });
      document.querySelectorAll('.product-box .add-cart').forEach(function(element) {
        element.style.color = 'white';
        element.style.backgroundColor = 'rgb(126, 126, 126)';
      });
      document.querySelectorAll('.input-field label').forEach(function(element) {
        element.style.color = 'white';
        element.style.fontWeight = 'lighter';
      });
    } else {
      body.style.backgroundColor = 'white';
      document.querySelectorAll('.price, .product-title').forEach(function(element) {
        element.style.color = 'black';
      });
      document.querySelectorAll('.product-description-details-details').forEach(function(element) {
        element.style.color = 'black';
      });
      document.querySelectorAll('.product-detail-price').forEach(function(button) {
        button.style.color = 'black';
      });
      document.querySelectorAll('.product-details-title').forEach(function(element) {
        element.style.color = 'black';
      });
      document.querySelectorAll('.product-detail-rating').forEach(function(element) {
        element.style.color = 'black';
      });
      document.querySelectorAll('.product-description-details').forEach(function(element) {
        element.style.color = 'black';
      });
      document.querySelectorAll('.product-description-details .subtitle-th').forEach(function(element) {
        element.style.backgroundColor = 'rgb(199, 199, 199)';
      });
    }
  }
});

document.addEventListener('DOMContentLoaded', function() {
  var input = document.querySelector('input[type="checkbox"]');
  var body = document.querySelector('body');
  var isBlack = localStorage.getItem('isBlack') === 'true';

  updateBackgroundColor();

  function updateBackgroundColor() {
    if (isBlack) {
      document.querySelectorAll('.product-box').forEach(function(element) {
        element.addEventListener('mouseover', handleProductBoxMouseOver);
        element.addEventListener('mouseout', handleProductBoxMouseOut);
      });
    } else {
      document.querySelectorAll('.product-box').forEach(function(element) {
        element.removeEventListener('mouseover', handleProductBoxMouseOver);
        element.removeEventListener('mouseout', handleProductBoxMouseOut);
      });
    }
  }

  function handleProductBoxMouseOver() {
    this.style.border = '3px solid rgb(126, 126, 126)';
  }

  function handleProductBoxMouseOut() {
    this.style.border = 'none';
  }
});

/*  Products  */

const products = [
  {
    title: "Bnfuck Streetwear Jeans",
    price: "40€",
    image: "img/products/Calças/unisex/Bnfuck Streetwear Jeans/back-dollar-jeans.webp",
    url: "Bnfuck Streetwear Jeans.php"
  },
  {
    title: "Skeleton Hoddie Full Zip",
    price: "30€",
    image: "img/products/Top/man/jackets/Skeleton Hoddie Full Zip/Skeleton Hoddie Full Zip.jpg",
    url: "Skeleton Hoddie Full Zip.php"
  },
  {
    title: "Sport Sunglasses",
    price: "10€",
    image: "img/products/Acc/glasses/Sport Sunglasses/oculos-femininos.jpg",
    url: "Sport Sunglasses.php"
  },
  {
    title: "Rhinestone Skeleton Hoodies",
    price: "40€",
    image: "img/products/Top/women/jackets/Rhinestone Skeleton Hoodies/shiny-bones-overcloud.webp",
    url: "Rhinestone Skeleton Hoodies.php"
  },
  {
    title: "McFace Streetwear Jeans",
    price: "40€",
    image: "img/products/Calças/unisex/McFace Streetwear Jeans/back-face-jeans.webp",
    url: ""
  },
  {
    title: "Devil Hoddie",
    price: "30€",
    image: "img/products/Top/women/jackets/Devil Hoddie/diabo-red.webp",
    url: ""
  },
  {
    title: "Kic Hoddie Full Zip",
    price: "35.98€",
    image: "img/products/Top/man/jackets/Kic Hoddie Full Zip/kic-hoddie-full-zip.webp",
    url: ""
  },
  {
    title: "RHINESTONE belt",
    price: "35€",
    image: "img/products/Acc/belt/RHINESTONE belt/shiny-belt.webp",
    url: ""
  },
  {
    title: "orogi sensitive screen gloves",
    price: "20.50€",
    image: "img/products/Acc/golves/orogi sensitive screen gloves/luvas.png",
    url: ""
  },
  {
    title: "orogi black shirt",
    price: "32€",
    image: "img/products/Top/man/shirts/orogi black shirt/orogishirt1.png",
    url: ""
  },
  {
    title: "orogi devil baggy pants",
    price: "40.25€",
    image: "img/products/Calças/unisex/orogi devil baggy pants/calças.png",
    url: ""
  },
  {
    title: "orogi balaclava behind the shadow",
    price: "12€",
    image: "img/products/Acc/mask/orogi balaclava behind the shadow/balaclava.png",
    url: ""
  }

]




