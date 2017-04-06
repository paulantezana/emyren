const   toggleMenu  = document.getElementById('toggleMenu');
        menu        = toggleMenu.nextElementSibling;
toggleMenu.addEventListener('click',()=>{
    menu.classList.toggle('menuShowContent');
});


// const   menuNav     = document.getElementById('menuNav'),
//         toggleMenu  = document.getElementById('toggleMenu'),
//         menu        = document.querySelector('#menuNav>ul'),
//         menuItem    = menu.querySelectorAll('#menuNav>ul>li');
//
// var showContent = function (element,link) {
//     link.addEventListener('click',function (e) {
//         e.stopPropagation();
//         element.classList.toggle('menuShowContent');
//     });
// };
//
// toggleMenu.addEventListener('click',(e)=>{
//     menu.classList.toggle('menuShowContent');
// });
//
//
// /* detectando submenus */
// for(let i of menuItem){
//     let childs = i.childElementCount;
//     i.classList.add('menu__item');
//     if(childs > 1){
//
//         const   subMenus   = menuNav.querySelectorAll('ul');
//         for(let x of subMenus){
//             // mD = x.previousElementSibling;
//             mP = x.parentElement;
//             mP.classList.add('icon-arrow-down');
//             showContent(x,mP);
//         }
//     }
// }
// menuNav.classList.remove('icon-arrow-down');
//
// /* optional */
// menu.classList.add('menu');
