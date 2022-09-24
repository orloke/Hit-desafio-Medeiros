// Evento de botões
document.querySelectorAll(".lista-noticias").forEach(element => {
    element.addEventListener('click', function(event){
        document.querySelectorAll(".lista-noticias").forEach(item => item.classList.remove("active")) // remover active do botão
        event.preventDefault()
        const moveToAttr = event.target.getAttribute("data-move-to");
        document.querySelector(".main-content").setAttribute("data-content", moveToAttr)
        
    const tamanhoContent = document.querySelector(".main-content").clientWidth;
    if (moveToAttr != "intro") {
        document.querySelector(".wrap").style.transform = `translateX(-${tamanhoContent}px)`
    }else { document.querySelector(".wrap").style.transform = `translateX(${0}px)`
}
    element.classList.add("active"); // adcionar active ao botão
    })
});


// Menu Hamburgue
document.querySelector('.first-button').addEventListener('click', function () {

    document.querySelector('.animated-icon1').classList.toggle('open');
});
    





;
