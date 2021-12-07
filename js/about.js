const a = document.querySelector('.header__burger');
const b = document.querySelector('.menu');
a.onclick = function () {
    b.classList.toggle('menu--active');
}