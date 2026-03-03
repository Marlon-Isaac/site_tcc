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
});