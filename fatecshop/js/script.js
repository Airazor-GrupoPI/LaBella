const imagem_grande = document.querySelector(".img-produto-grande")
const miniaturas = document.getElementsByClassName("img-produto-pequeno")

miniaturas[0].addEventListener("click", () => {
    imagem_grande.src = miniaturas[0].src
    miniaturas[0].classList.add("imagem-selecionada")
    miniaturas[1].classList.remove("imagem-selecionada")
    miniaturas[2].classList.remove("imagem-selecionada")
    miniaturas[3].classList.remove("imagem-selecionada")
})

miniaturas[1].addEventListener("click", () => {
    imagem_grande.src = miniaturas[1].src
    miniaturas[0].classList.remove("imagem-selecionada")
    miniaturas[1].classList.add("imagem-selecionada")
    miniaturas[2].classList.remove("imagem-selecionada")
    miniaturas[3].classList.remove("imagem-selecionada")
})

miniaturas[2].addEventListener("click", () => {
    imagem_grande.src = miniaturas[2].src
    miniaturas[0].classList.remove("imagem-selecionada")
    miniaturas[1].classList.remove("imagem-selecionada")
    miniaturas[2].classList.add("imagem-selecionada")
    miniaturas[3].classList.remove("imagem-selecionada")
})

miniaturas[3].addEventListener("click", () => {
    imagem_grande.src = miniaturas[3].src
    miniaturas[0].classList.remove("imagem-selecionada")
    miniaturas[1].classList.remove("imagem-selecionada")
    miniaturas[2].classList.remove("imagem-selecionada")
    miniaturas[3].classList.add("imagem-selecionada")
})

