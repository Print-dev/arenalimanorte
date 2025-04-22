window.addEventListener('scroll', () => {
    const texto = document.getElementById('textoEscenario');
    const escenario = document.getElementById('carouselescenario');
    const rect = escenario.getBoundingClientRect();

    if (rect.top < window.innerHeight && rect.bottom >= 0) {
        texto.classList.add('visible');
    } else {
        texto.classList.remove('visible');
    }

    const textoecenario = document.getElementById("textoEscenario");

    function isInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top < window.innerHeight &&
            rect.bottom > 0
        );
    }

    function checkScroll() {
        if (isInViewport(textoecenario)) {
            textoecenario.classList.add("visible");
            textoecenario.classList.remove("hidden");
        } else {
            textoecenario.classList.remove("visible");
            textoecenario.classList.add("hidden");
        }
    }

    window.addEventListener("scroll", checkScroll);
    window.addEventListener("load", checkScroll); // para que revise al recargar
});