const newCate = document.querySelectorAll('.cate')

function newCategoria() {
    if (newCate[0].className != 'newCate') {
        newCate[0].style.animationName = 'nvcate'
        newCate[0].classList.add('newCate')
    }
}

function exitMenu() {
    console.log('Esta sendo identificado o exitMenu')
    console.log(newCate[0].className)
    if (newCate[0].className != 'cate') {
        newCate[0].style.animationName = 'exitMenu'
        setTimeout(() =>{
            newCate[0].classList.remove('newCate')
        },750)
    }
}
