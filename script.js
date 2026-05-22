const burger = document.getElementById('burger');
const menu = document.getElementById('menu');
burger.addEventListener('click', () => menu.classList.toggle('nav-open'));

document.querySelectorAll('nav a').forEach(link => {
  link.addEventListener('click', () => menu.classList.remove('nav-open'));
});
