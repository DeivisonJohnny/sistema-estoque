const elementAnimation = document.querySelector('#elementAnimation')



// animação background

function animationBg() {
    const body = document.querySelector('body')
    let i = 0

    setInterval(() => {
        i += 1
        body.style.backgroundImage = 'linear-gradient(' + i + 'deg, #EC8D19, #1a0900 80%)'
        if (i >= 360) {
            i = 0
        }
        console.log(i)
    }, 15)
}

// animação da logo

window.onload = function () {
    setTimeout(() => {
        elementAnimation.style.animationName = 'apresentaLogin'
        setTimeout(() => {
            elementAnimation.style.left = 'auto'
        }, 800)
    }, 1000)
    animationBg()

}
// Aqui vai começar á válidar os campos á ser preenchido

const form = document.querySelector('form')

form.addEventListener('submit', (event) => {
    if (inputs[1].value.length < 3 || inputs[2].value.length < 8) {
        event.preventDefault()
        validUsu()
        validPass()
    }
})

const inputs = document.querySelectorAll('input')
const spans = document.querySelectorAll('.required')

// criar funções

function setError(error) {
    inputs[error].style.borderColor = 'red'
    inputs[error].style.boxShadow = '#ff1700ba 0px 0px 10px -1px'
    spans[error - 1].style.display = 'block'
}
function removeError(valid) {
    inputs[valid].style.borderColor = 'red'
    inputs[valid].style.boxShadow = '0px 0px 10px 1.5px #ec8d19b7'
    spans[valid - 1].style.display = 'none'
}

function validUsu() {
    if (inputs[1].value.length < 3) {
        setError(1)
    } else {
        removeError(1)
    }
}

function validPass() {
    if (inputs[2].value.length < 8) {
        console.log(inputs[2].value.length)
        setError(2)
    } else {
        removeError(2)
    }
}

function mostrarPass() {
    const icon = document.querySelectorAll('.bi')
    if (inputs[2].type == 'password') {
        inputs[2].type = 'text'
        icon[0].classList.remove('bi-eye')
        icon[0].classList.add('bi-eye-slash')
    } else {
        inputs[2].type = 'password'
        icon[0].classList.remove('bi-eye-slash')
        icon[0].classList.add('bi-eye')
    }
}