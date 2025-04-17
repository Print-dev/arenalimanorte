<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arena Lima Norte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dynpy0r4v/image/upload/v1744848217/arenalimanorte/z1yjapubxokft2dmvodw.png" type="image/x-png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">

</head>

<body class="bg-black text-white">
    <div class="background-blur"></div>

    <section>
        <nav class="navbar navbar-expand-lg navbar-dark w-100 z-3 fixed-top py-3" id="mainNavbar">
            <div class="container-fluid d-flex justify-content-between align-items-center px-4">
                <!-- Izquierda: Logo + Enlaces -->
                <div class="d-flex align-items-center">
                    <a class="navbar-brand me-3" href="#">
                        <img src="https://res.cloudinary.com/dynpy0r4v/image/upload/v1744859794/arenalimanorte/oincvsofctmbhuoqnhlc.png" width="200" alt="Logo">
                    </a>
                    <button class="navbar-toggler border-white me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav gap-3">
                            <li class="nav-item"><a class="nav-link text-white" href="">Quienes somos</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#">Eventos próximos</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#">Vive la experiencia</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#">Contáctanos</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Derecha: Botones -->
                <div class="d-flex gap-3">
                    <button class="btn text-white p-3 rounded-5">Iniciar sesión</button>
                    <button class="btn btn-light text-black p-3 rounded-5">Registrarse</button>
                </div>
            </div>
        </nav>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="./images/r1.jpeg" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./images/r2.jpeg" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./images/r3.jpeg" class="d-block w-100" alt="Imagen 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </section>

    <section>
        <div class="container my-4">
            <div class="card-carousel d-flex overflow-auto" id="drag-scroll">
                <div class="card me-3" style="min-width: 250px;">
                    <img src="https://via.placeholder.com/250x150" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Card 1</h5>
                        <p class="card-text">Contenido de la tarjeta 1.</p>
                    </div>
                </div>
                <div class="card me-3" style="min-width: 250px;">
                    <img src="https://via.placeholder.com/250x150" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">Contenido de la tarjeta 2.</p>
                    </div>
                </div>
                <div class="card me-3" style="min-width: 250px;">
                    <img src="https://via.placeholder.com/250x150" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Card 3</h5>
                        <p class="card-text">Contenido de la tarjeta 3.</p>
                    </div>
                </div>
                <div class="card me-3" style="min-width: 250px;">
                    <img src="https://via.placeholder.com/250x150" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Card 4</h5>
                        <p class="card-text">Contenido de la tarjeta 4.</p>
                    </div>
                </div>
                <div class="card me-3" style="min-width: 250px;">
                    <img src="https://via.placeholder.com/250x150" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Card 1</h5>
                        <p class="card-text">Contenido de la tarjeta 1.</p>
                    </div>
                </div>
                <div class="card me-3" style="min-width: 250px;">
                    <img src="https://via.placeholder.com/250x150" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">Contenido de la tarjeta 2.</p>
                    </div>
                </div>
                <div class="card me-3" style="min-width: 250px;">
                    <img src="https://via.placeholder.com/250x150" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Card 3</h5>
                        <p class="card-text">Contenido de la tarjeta 3.</p>
                    </div>
                </div>
                <div class="card me-3" style="min-width: 250px;">
                    <img src="https://via.placeholder.com/250x150" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Card 4</h5>
                        <p class="card-text">Contenido de la tarjeta 4.</p>
                    </div>
                </div>
                <!-- Agrega más cards si quieres -->
            </div>
        </div>
    </section>


    <section id="escenario">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Escenario</h2>
                    <p>
                        Aquí puedes describir tu producto, servicio o propuesta de valor.
                        Es buena idea usar frases claras y concisas.
                    </p>
                    <a href="#" class="btn btn-primary">Saber más</a>
                </div>
                <div class="col-md-6">
                    <img src="./images/p1.jpeg" class="img-fluid" alt="Descripción imagen">
                </div>
            </div>
        </div>

    </section>
    <section id="sonido">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="./images/p1.jpeg" class="img-fluid" alt="Descripción imagen">
                </div>
                <div class="col-md-6">
                    <h2>Sonido</h2>
                    <p>
                        Aquí puedes describir tu producto, servicio o propuesta de valor.
                        Es buena idea usar frases claras y concisas.
                    </p>
                    <a href="#" class="btn btn-primary">Saber más</a>
                </div>

            </div>
        </div>

    </section>
    <section id="ticketera">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Ticketera</h2>
                    <p>
                        Aquí puedes describir tu producto, servicio o propuesta de valor.
                        Es buena idea usar frases claras y concisas.
                    </p>
                    <a href="#" class="btn btn-primary">Saber más</a>
                </div>
                <div class="col-md-6">
                    <img src="./images/p1.jpeg" class="img-fluid" alt="Descripción imagen">
                </div>
            </div>
        </div>

    </section>
    <section id="experiencia">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Experiencia</h2>
                    <p>
                        Aquí puedes describir tu producto, servicio o propuesta de valor.
                        Es buena idea usar frases claras y concisas.
                    </p>
                    <a href="#" class="btn btn-primary">Saber más</a>
                </div>
                <div class="col-md-6">
                    <img src="./images/p1.jpeg" class="img-fluid" alt="Descripción imagen">
                </div>
            </div>
        </div>

    </section>


    <!-- Texto centrado debajo del navbar -->
    <!--  -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const scrollContainer = document.getElementById('drag-scroll');
        let isDown = false;
        let startX;
        let scrollLeft;

        scrollContainer.addEventListener('mousedown', (e) => {
            isDown = true;
            scrollContainer.classList.add('cursor-grabbing');
            startX = e.pageX - scrollContainer.offsetLeft;
            scrollLeft = scrollContainer.scrollLeft;
        });

        scrollContainer.addEventListener('mouseleave', () => {
            isDown = false;
            scrollContainer.classList.remove('cursor-grabbing');
        });

        scrollContainer.addEventListener('mouseup', () => {
            isDown = false;
            scrollContainer.classList.remove('cursor-grabbing');
        });

        scrollContainer.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - scrollContainer.offsetLeft;
            const walk = (x - startX) * 1.5;
            scrollContainer.scrollLeft = scrollLeft - walk;
        });
    </script>

</body>

</html>