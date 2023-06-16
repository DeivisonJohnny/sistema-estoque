const btnMenu = document.querySelector('.bi-list')
const menu = document.querySelector('.menu')
console.log(menu)


btnMenu.addEventListener('click', (event) => {
console.log(menu.className == 'menu')

    if (menu.className == 'menu') {
        if(menu.style.animationName != 'openMenu') {
            menu.style.animationName = 'openMenu'
        }
        menu.classList.add('menu-resp')
        setTimeout(() => {
            menu.style.left = '0%'
        },390)
    } else {
        
    }
})

menu.addEventListener('click', () => {
    menu.style.animationName = 'closeMenu'
    setTimeout(() => {
        menu.classList.remove('menu-resp')
    }, 390);
})