const newCate = document.querySelectorAll('.cate')
const form = document.querySelectorAll('form')[0]

form.addEventListener('submit', (event) => {
    var selectedIndex = select.selectedIndex

    var selectedOption = select.options[selectedIndex].value
    if (selectedOption == '') {
        event.preventDefault()
        alert('Por favor selecione uma categoria')
        select.style.borderColor = 'red'
        select.style.boxShadow = '0px 0px 10px -2px red'
    } else {
        select.style.borderColor = 'auto'
        select.style.boxShadow = 'none'
    }
})

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
        setTimeout(() => {
            newCate[0].classList.remove('newCate')
        }, 450)
    }
}


// validação de campos

const inputs = document.querySelectorAll('.inputs')
const spans = document.querySelectorAll('span')
const select = document.getElementById('categoria')

select.addEventListener('click', () => {
    if (select.value == '') {
        select.style.borderColor = 'red'
        select.style.boxShadow = '0px 0px 10px -2px red' 
    } else {
        select.style.borderColor = 'gray'
        select.style.boxShadow = 'none'
    }
})

function setError(error) {
    inputs[error].style.borderColor = 'red'
    inputs[error].style.boxShadow = '0px 0px 10px -2px red'
    spans[error].style.display = 'flex'
}

function removeError(valid) {
    inputs[valid].style.borderColor = '#EC8D19'
    inputs[valid].style.boxShadow = '0px 0px 10px -2px #EC8D19'
    spans[valid].style.display = 'none'
}

function validInp(index) {
    return function () {
        const valor = inputs[index].value
        console.log('Índice:', index, 'Valor:', valor);
        if (valor.length < 3) {
            setError(index)
            spans[index].innerHTML = '* Deve ter ao menos 3 caracteres'
        } else {
            removeError(index)

        }
    }

}

for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('blur', validInp(i))
    inputs[i].addEventListener('input', validInp(i))
}

