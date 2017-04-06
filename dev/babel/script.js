const   toggleMenu = document.getElementById('menu'),
        menu = toggleMenu.nextElementSibling;
toggleMenu.addEventListener('click',()=>{
    menu.classList.toggle('toggleMenu');
});