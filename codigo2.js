<<<<<<< HEAD
const MenuIcon = document.querySelector('.menu-icon');
  const menu = document.querySelector('.menu2');
  const menuLinks = document.querySelectorAll('.menu2 a');

  MenuIcon.addEventListener('click', () => {
    menu.classList.toggle('active');
  });

  menuLinks.forEach(link => {
  link.addEventListener('click', () => {
    menu.classList.remove('active');
  });
=======
const MenuIcon = document.querySelector('.menu-icon');
  const menu = document.querySelector('.menu2');
  const menuLinks = document.querySelectorAll('.menu2 a');

  MenuIcon.addEventListener('click', () => {
    menu.classList.toggle('active');
  });

  menuLinks.forEach(link => {
  link.addEventListener('click', () => {
    menu.classList.remove('active');
  });
>>>>>>> 121a090765f9de969d74f7dd234d8d0781141d3b
});