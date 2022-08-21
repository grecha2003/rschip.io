const btnHeaderNavBurgerMenu = document.querySelector('.headerNavBurgerMenu');
const btnMenuClose = document.querySelector('.menuClose');

const menu = document.querySelector('.menu');


[btnHeaderNavBurgerMenu, btnMenuClose].forEach(element => {
    element.addEventListener("click", () => {
        menu.classList.toggle('active');
        document.querySelector('body').classList.toggle('isMenuShow');
    });
});