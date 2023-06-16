const menu = document.querySelector('.menu')

console.log(menu.className == 'menu')

menu[0].addEventListener('click', function() {
    if (menu.className == 'menu') {
        
        menu.classList.add('menu-resp')
    } else {
        
    }
})