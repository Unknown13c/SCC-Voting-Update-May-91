const navsMenu = document.querySelector('.navsMenue');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');
    
openMenu.addEventListener('click',show);
closeMenu.addEventListener('click',close);

function show(){
    navsMenu.style.display = 'flex';
    navsMenu.style.top = '0';
}
function close(){
   navsMenu.style.display = 'flex';
   navsMenu.style.top = '-110%';
}