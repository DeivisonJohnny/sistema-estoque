const menu = document.querySelector('#menu');
const imgAuto = document.querySelector('#img-auto');

function openMenu() {
    console.log(menu.className)
    if (menu.className == "list") {
        menu.style.animationName = 'abrirMenu'
        menu.classList.add("menuOpen")
    }
}

function exitMenu() {
    if (menu.className != "list") {
        menu.style.animationName = 'fecharMenu'
        setTimeout(() => {
            menu.classList.remove("menuOpen")
        }, 600);
    }
}

var imagens = [
    'https://img.freepik.com/fotos-gratis/deliciosa-variedade-de-cervejas-americanas_23-2148907562.jpg?t=st=1685790132~exp=1685790732~hmac=727a61b0cd3584e7626f99195db7a212906ed21d86c0b94fc02aacd177116e9d',

    'https://img.freepik.com/fotos-gratis/uma-cerveja-espumosa-em-um-copo-ai-generativa_188544-12255.jpg?t=st=1685790132~exp=1685790732~hmac=b76baea2cdd45d58952d875b36d9a7bdd26cff4dfe10fec5eca58a8b76bb3218',

    'https://img.freepik.com/fotos-gratis/copo-de-cerveja-na-madeira-com-lupulo_628469-322.jpg?t=st=1685790829~exp=1685791429~hmac=e6e2cdf4cd045aaf5ecf0fa38c1375b1f1f865e76f7c096ba07d8a4ea9e92d7e'
]

var i  = 0;

function changeImage() {
    imgAuto.src = imagens[i];
    i = (i + 1) % imagens.length;

}

window.onload = function () {
    // setInterval(changeImage, 5000); // Mude a imagem a cada 2 segundos (2000 milissegundos)
    setInterval(() => {
        imgAuto.style.animationName = 'nada'
    }, 2500);
    setInterval(() => {
        imgAuto.style.animationName = 'imgAuto'
        changeImage()
    }, 5000);
};

