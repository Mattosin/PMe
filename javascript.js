function adjustPaddingTop() {
    const fixedElement = document.querySelector('.fixed');
    const homeElement = document.querySelector('.home');

    // Obtendo a altura do elemento fixed e adicionando 40px de padding no topo do elemento .home
    const fixedHeight = fixedElement.offsetHeight;
    homeElement.style.paddingTop = `${fixedHeight + 40}px`;
}

window.addEventListener('load', adjustPaddingTop);
window.addEventListener('resize', adjustPaddingTop);

window.addEventListener('scroll', () => {
    const fixedElement = document.querySelector('.fixed');
    const currentScrollTop = window.scrollY;

    if (currentScrollTop > 100) {
        // se o usuário rolou mais de 100px
        fixedElement.classList.add('active');
    } else {
        // se o usuário voltou para menos de 100px
        fixedElement.classList.remove('active');
    }

    // Ajustando o padding-top cada vez que o evento de scroll é acionado (opcional)
    adjustPaddingTop();
});
