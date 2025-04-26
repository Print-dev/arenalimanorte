window.addEventListener("DOMContentLoaded", async () => {

    function $q(object = null) {
        return document.querySelector(object);
    }

    function $all(object = null) {
        return document.querySelectorAll(object);
    }

    async function getDatos(link, params) {
        let data = await fetch(`${link}?${params}`);
        return data.json();
    }

    let containerSwiperEventos = $q("#swiper-eventos")
    let containerSwiperExperiencias = $q("#swiper-experiencias")
    console.log("hoa");
    async function obtenerEventosPresentados() {
        const params = new URLSearchParams();
        params.append("operation", "obtenerEventosPresentados");
        const data = await getDatos(`http://localhost/arenalimanorte/controllers/complemento.controller.php`, params);
        console.log("data _>>><", data);
        data.forEach(evento => {
            containerSwiperEventos.innerHTML += `
        <swiper-slide class="swiper-slide-coverflow">
                    <div class="card swiper-img-coverflow ">
                        <a href="${evento.link}" target="_blank">
                            <img class="card-img-top" src="https://res.cloudinary.com/dynpy0r4v/image/upload/v1745593192/${evento.imagen}" />
                        </a>
                    </div>
                </swiper-slide>
        `
        });
        //return data;
    }

    async function obtenerExperienciasPresentados() {
        const params = new URLSearchParams();
        params.append("operation", "obtenerExperienciasPresentados");
        const data = await getDatos(`http://localhost/arenalimanorte/controllers/complemento.controller.php`, params);
        console.log("data _>>><", data);
        data.forEach(evento => {
            containerSwiperExperiencias.innerHTML += `
            <swiper-slide class="swiper-slide-coverflow">
                <div class="card swiper-img-coverflow ">
                            <img class="card-img-top" src="https://res.cloudinary.com/dynpy0r4v/image/upload/v1745593192/${evento.imagen}" />

                </div>
            </swiper-slide>
        
        `
        });
        //return data;
    }

    await obtenerEventosPresentados()
    await obtenerExperienciasPresentados()
})

window.addEventListener('scroll', async () => {



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

