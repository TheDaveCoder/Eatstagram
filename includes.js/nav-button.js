var errorScreen = document.querySelector('.temp-error');
var navIconCart = document.querySelector('.cart');
var navIconFav = document.querySelector('.favorites');

navIconCart.addEventListener('click', ()=> {
  errorScreen.classList.add('errScrActive');
  setTimeout(function () {
    errorScreen.classList.remove('errScrActive');
  }, 2000);
});
navIconFav.addEventListener('click', ()=> {
  errorScreen.classList.add('errScrActive');
  setTimeout(function () {
    errorScreen.classList.remove('errScrActive');
  }, 2000);
})
