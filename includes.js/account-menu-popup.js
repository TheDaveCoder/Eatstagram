var activatePopUp = document.querySelector('.profile');
var accountMenu = document.querySelector('.account-menu');
var deactivatePopUp = document.querySelector('.back');
var logout = document.querySelector('.logout');

activatePopUp.addEventListener('click', () => {
  accountMenu.classList.add('activate');
});
deactivatePopUp.addEventListener('click', () => {
  accountMenu.classList.remove('activate');
})
logout.addEventListener('click', ()=> {
  accountMenu.classList.remove('activate');
  window.location.replace('../Logout/logout.php');
})
