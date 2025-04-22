window.addEventListener('scroll', () => {
    const texto = document.getElementById('textoEscenario');
    const escenario = document.getElementById('carouselescenario');
    const rect = escenario.getBoundingClientRect();

    if (rect.top < window.innerHeight && rect.bottom >= 0) {
        texto.classList.add('visible');
    } else {
        texto.classList.remove('visible');
    }
});