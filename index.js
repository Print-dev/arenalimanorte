window.addEventListener('scroll', () => {
    const elementos = [
        {
            texto: document.getElementById('textoEscenario'),
            contenedor: document.getElementById('carouselescenario')
        },
        {
            texto: document.getElementById('textoEscenario2'),
            contenedor: document.getElementById('carouselsonido')
        }
    ];

    function isInViewport(el) {
        const rect = el.getBoundingClientRect();
        return rect.top < window.innerHeight && rect.bottom > 0;
    }

    function checkScroll() {
        elementos.forEach(({ texto, contenedor }) => {
            if (isInViewport(contenedor)) {
                texto.classList.add('visible');
            } else {
                texto.classList.remove('visible');
            }
        });
    }

    window.addEventListener('scroll', checkScroll);
    window.addEventListener('load', checkScroll);
});