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

    <section>
        <nav class="navbar navbar-expand-lg shadow sticky-sm-top">
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
    </section>

<!--     <section>
        <h1>Has de tu presentación algo único</h1>
    </section>
 -->
    <section>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" style="margin: 100px;" data-bs-ride="carousel">
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

</body>

</html>