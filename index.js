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
    let containerCarouselExperiencias = $q(".carousel-experiencias")
    console.log("hoa");
    async function obtenerEventosPresentados() {
        const params = new URLSearchParams();
        params.append("operation", "obtenerEventosPresentados");
        const data = await getDatos(`http://localhost/arenalimanorte/controllers/complemento.controller.php`, params);
        console.log("data _>>><", data);
        if (data.length == 0) {
            containerSwiperEventos.innerHTML = `
            <div class="container text-center ">
                <p class="">Aun no hay nada.</p>
            </div>
                
            `
        } else {
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
        }

    }

    async function obtenerExperienciasPresentados() {
        const params = new URLSearchParams();
        params.append("operation", "obtenerExperienciasPresentados");
        const data = await getDatos(`http://localhost/arenalimanorte/controllers/complemento.controller.php`, params);
        console.log("data _>>><", data);

        // Verifica si hay al menos un evento
        if (data.length > 0) {
            // Primer item del carousel con clase "active"
            containerCarouselExperiencias.innerHTML = `
                <div class="carousel-item active">
                    <img src="https://res.cloudinary.com/dynpy0r4v/image/upload/v1745593192/${data[0].imagen}" class="d-block w-100" alt="...">
                </div>
            `;

            // Agregar los demás items sin la clase "active"
            data.slice(1).forEach(evento => {
                containerCarouselExperiencias.innerHTML += `
                <div class="carousel-item">
                    <img src="https://res.cloudinary.com/dynpy0r4v/image/upload/v1745593192/${evento.imagen}" class="d-block w-100" alt="...">
                </div>
                `;
            });
        }
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

