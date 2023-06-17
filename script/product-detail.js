function buttonClicked(button) {
  var buttons = document.getElementsByClassName('product-size')[0].getElementsByTagName('button');
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].classList.remove('clicked');
  }
  button.classList.add('clicked');
}

const allHoverImages = document.querySelectorAll ('.hover-container div img');
const imgContainer = document.querySelector('.product-details-img');

window.addEventListener('DOMContentLoaded', () => {
  allHoverImages[0].parentElement.classList.add('active');
});

allHoverImages.forEach((image) => {
  image.addEventListener('mouseover', () => {
    imgContainer.querySelector('img').src = image.src;
    resetActiveImg();
    image.parentElement.classList.add('active');
  });
});

function resetActiveImg() {
  allHoverImages.forEach((img) => {
    img.parentElement.classList.remove('active');
  });
}