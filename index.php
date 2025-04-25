<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arena Lima Norte</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- BOOTSTRAP ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/corporate-ui-dashboard.css" rel="stylesheet" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


    <!-- Otros recursos -->
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/dynpy0r4v/image/upload/v1744848217/arenalimanorte/z1yjapubxokft2dmvodw.png"
        type="image/x-png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">

</head>


<body class="bg-black text-white">

    <div class="background-blur">

    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark nav w-100 z-3 fixed-top" id="mainNavbar">
        <div class="container-fluid px-4">
            <!-- Izquierda: Logo -->
            <a class="navbar-brand" href="#">
                <img src="https://res.cloudinary.com/dynpy0r4v/image/upload/v1744859794/arenalimanorte/oincvsofctmbhuoqnhlc.png"
                    width="100" alt="Logo">
            </a>

            <!-- Botón hamburguesa -->
            <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Centro: Items centrados -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav text-center">
                    <li class="nav-item"><a class="nav-link text-white" href="#quienes">Quienes somos</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#eventos">Eventos próximos</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#experiencias">Experiencias</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="#contactos">Contáctanos</a></li>
                </ul>
            </div>

            <!-- Derecha: Botón -->
            <div class="d-none d-lg-flex ms-auto">
                <a href="https://altoketicket.com.pe" target="_blank" class="btn-card p-3 rounded-5"><i
                        class="bi bi-ticket"></i>
                    Ticketera</a>
            </div>
        </div>
    </nav>

    <!-- CAROUSEL -->
    <div class="carousel-container position-relative">
        <!-- El carousel -->
        <div id="carouselprincipal" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner" data-bs-interval="1000">
                <div class="carousel-item active">
                    <img src="./images/ARENA-LIMA-NORTE-BANNER.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/FT1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/FT2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/FT3.png" class="d-block w-100" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselprincipal"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselprincipal"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- CAROUSEL -->
    <div class="carousel-container2 position-relative">
        <div id="textoEscenario" class="texto-encima fade-text texto-escenario">
            <span class="texto-pequeño">Un Escenario</span> <br><span class="texto-degradado">ÚNICO</span>
        </div>

        <!-- El carousel -->
        <div id="carouselescenario" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner" data-bs-interval="1000">
                <img src="./images/FT7.png" class="d-block w-100" alt="...">


            </div>


        </div>
    </div>
    <!-- CAROUSEL -->
    <div class="carousel-container3 position-relative">
        <div class="color-overlay"></div>

        <div id="textoEscenario2" class="texto-encima2 fade-text texto-escenario2">
            <span class="texto-pequeño2">Un Sonido</span> <br> <span class="texto-degradado2">CLARO</span>
        </div>

        <!-- El carousel -->
        <div id="carouselsonido" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner" data-bs-interval="1000">
                <img src="./images/FT8.png" class="d-block w-100" alt="...">
                <!-- <div class="carousel-item">
                    <img src="./images/FT2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/FT3.png" class="d-block w-100" alt="...">
                </div> -->
            </div>

        </div>
    </div>
    <!--  CAROUSEL EVENTOS PROXIMOS -->
    <section class="ticketera-section" id="quienes">
        <div class="container-fluid ">
            <div class="row align-items-center m-0">
                <!-- Columna de texto -->
                <!-- Columna de imagen -->
                <div class="col-md-6">
                    <div class="carousel-container position-relative">
                        <!-- El carousel -->
                        <div id="carouselquienes" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner" data-bs-interval="1000">
                                <div class="carousel-item active">
                                    <img src="./images/FT10.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/FT11.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/FT12.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/FT13.png" class="d-block w-100" alt="...">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselquienes"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselquienes"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-2">
                    <div class="ticketera-content">
                        <h1 class="ticketera-title">
                            <span class="ticketera-main-title">¿Quienes somos?</span>
                        </h1>
                        <p class="ticketera-description mt-3">
                            Nos dedicamos a impulsar la carrera de nuestros artistas. Nuestro equipo está encargado de
                            asegurar la distribución y producción de su música.
                        </p>
                        <br>
                        <a href="https://vegadistribution.org/" target="_blank" class="btn-card mt-4 px-4 py-2">
                            Vega Music Distributions <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="mt-5 position-relative overflow-hidden swiper-wrapper-coverflow" id="eventos">
        <div class="container ">

            <div class="text-start ">
                <h2>Próximos eventos.</h2>
            </div>
            <swiper-container class="mySwiper swiper-coverflow" slides-per-view="1" breakpoints='{
                "0": { "slidesPerView": 1 },
                "768": { "slidesPerView": 2 },
                "1024": { "slidesPerView": 3 }
              }' centered-slides="true" initial-slide="1" space-between="0" navigation="true" navigation="true"
                centered-slides="true" pagination="false">
                
                <swiper-slide class="swiper-slide-coverflow">
                    <div class="card swiper-img-coverflow ">
                        <a href="https://altoketicket.com.pe/event/lanzamiento-oficial-%22stefany-lozano-y-su-pasi%C3%B3n-morena%22/162" target="_blank">
                            <img class="card-img-top" src="./images/estefany.png" />
                        </a>
                    </div>
                </swiper-slide>
                <swiper-slide class="swiper-slide-coverflow">
                    <div class="card swiper-img-coverflow ">
                        <a href="https://altoketicket.com.pe/event/lanzamiento-oficial-%22stefany-lozano-y-su-pasi%C3%B3n-morena%22/162" target="_blank">
                            <img class="card-img-top" src="./images/estefany.png" />
                        </a>
                    </div>
                </swiper-slide>
                <swiper-slide class="swiper-slide-coverflow">
                    <div class="card swiper-img-coverflow ">
                        <a href="https://altoketicket.com.pe/event/lanzamiento-oficial-%22stefany-lozano-y-su-pasi%C3%B3n-morena%22/162" target="_blank">
                            <img class="card-img-top" src="./images/estefany.png" />
                        </a>
                    </div>
                </swiper-slide>

            </swiper-container>
        </div>
        <div class="d-flex justify-content-center">
            <a href="https://altoketicket.com.pe/" target="_blank" class="btn-card mb-5">Comprar Entradas</a>
        </div>
    </section>

    <!-- NEW SECTION TICKETERA -->
    <div class="carousel-container3 position-relative">
        <!-- El carousel -->
        <div id="carouselsonido" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner" data-bs-interval="1000">
                <!-- IMPORTANTE: row agregada -->
                <div class=" fondo-ticketera row justify-content-center align-items-center m-0 ">

                    <!-- Columna izquierda -->
                    <div
                        class="col-12 col-md-4 p-5 d-flex flex-column justify-content-center align-items-center text-start">
                        <div class="ticketera-content">
                            <div class="ticketera-title2">
                                <span class="ticketera-subtitle2">Nuestra</span><br>
                                <span class="ticketera-main-title2">Ticketera</span>
                            </div>
                            <p class="text-dark mt-3">
                                AltokeTicket se especializa en ofrecer acceso a una amplia gama de eventos
                                en vivo, conectando a los amantes de la música con sus artistas preferidos.
                            </p>
                            <br>
                            <a href="https://altoketicket.com.pe/" target="_blank" class="btn-card-dark mt-4 px-4 py-2">
                                Ir <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Columna derecha -->
                    <div class="col-12 col-md-5 p-5 d-flex justify-content-center align-items-center">
                        <img src="./images/logoaltoke.png" class="img-fluid w-50 h-50 object-fit-contain"
                            alt="Plataforma de tickets">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- SECTION TICKETERA -->
    <!--     <div class="">
        <img src="./images/FT9.png" class="d-block w-100 h-100 object-fit-cover" alt="Plataforma de tickets">
    </div> -->

    <!-- <section class="quienes-section" id="quienes">
        <img src="https://altoketicket.com.pe/assets/admin/img/sliders/68078048026d1.png" alt="" class="img-fluid w-100"
            style="height: 500px; object-fit: cover;">

        <div class="text-center container-quienes">
            <h1>¿Quiénes somos?</h1>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum. </p>
        </div>
    </section>
 -->


    <section class="experiencias-section py-5" id="experiencias">
        <div class="container-fluid">


            <div class="row align-items-center">
                <div class="col-md-3 col-12 py-2">
                    <div class="experiencias-content">
                        <h1
                            class="col-12 col-md-4 p-5 d-flex flex-column justify-content-center align-items-center text-start">
                            <span class="experiencias-main-title">Experiencias</span>
                            <span class="experiencias-subtitle">Únicas</span><br>
                        </h1>
                    </div>
                </div>
                <!-- Columna de texto -->
                <div class="col-md-9">
                    <swiper-container class="mySwiper swiper-coverflow" slides-per-view="1" breakpoints='{
                        "0": { "slidesPerView": 1 },
                        "768": { "slidesPerView": 2 },
                        "1024": { "slidesPerView": 3 }
                      }' centered-slides="true" initial-slide="2" space-between="0" navigation="true" navigation="true"
                        centered-slides="true" pagination="false">

                        <swiper-slide class="swiper-slide-coverflow">
                            <div class="card swiper-img-coverflow ">
                                <img class="card-img-top" src="./images/estefany.png" />

                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-coverflow">
                            <div class="card swiper-img-coverflow ">
                                <img class="card-img-top" src="./images/estefany.png" />

                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-coverflow">
                            <div class="card swiper-img-coverflow ">
                                <img class="card-img-top" src="./images/estefany.png" />

                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-coverflow">
                            <div class="card swiper-img-coverflow ">
                                <img class="card-img-top" src="./images/estefany.png" />

                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-coverflow">
                            <div class="card swiper-img-coverflow ">
                                <img class="card-img-top" src="./images/estefany.png" />

                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-coverflow">
                            <div class="card swiper-img-coverflow ">
                                <img class="card-img-top" src="./images/estefany.png" />

                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-coverflow">
                            <div class="card swiper-img-coverflow ">
                                <img class="card-img-top" src="./images/estefany.png" />

                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-coverflow">
                            <div class="card swiper-img-coverflow ">
                                <img class="card-img-top" src="./images/estefany.png" />

                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-coverflow">
                            <div class="card swiper-img-coverflow ">
                                <img class="card-img-top" src="./images/estefany.png" />

                            </div>
                        </swiper-slide>
                    </swiper-container>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <footer class="footer-blur text-white py-5" id="contactos">
        <div class="container text-center">

            <!-- Logo centrado -->
            <img src="https://res.cloudinary.com/dynpy0r4v/image/upload/v1744848217/arenalimanorte/z1yjapubxokft2dmvodw.png"
                alt="Logo" width="60" height="60" class="mb-3">

            <!-- Líneas + redes sociales -->
            <div class="d-flex align-items-center justify-content-center mb-4">
                <div class="flex-grow-1 border-top me-3 opacity-50"></div>
                <div class="d-flex gap-3">
                    <a href="https://www.facebook.com/OmarVegaProducciones" class="text-white"><i
                            class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/vegaproduccionesof/" target="_blank" class="text-white"><i
                            class="bi bi-instagram"></i></a>
                    <a href="http://www.youtube.com/@OmarVegaProducciones" target="_blank" class="text-white"><i
                            class="bi bi-youtube"></i></a>
                    <a href="" class="text-white"><i class="bi bi-tiktok"></i></a>
                </div>
                <div class="flex-grow-1 border-top ms-3 opacity-50"></div>
            </div>

            <!-- Menú de enlaces -->
            <div class="row text-uppercase small mt-4">
                <div class="col-6 col-md-3 mb-3">
                    <strong>Contactos</strong><br>
                    <a href="https://wa.me/51973189350" target="_blank"
                        class="text-white-50 text-decoration-none d-block mt-2">+51 970666528</a>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <strong>Correos</strong><br>
                    <a href="#" class="text-white-50 text-decoration-none d-block mt-2">asesorcomercial</a>
                    <a href="#" class="text-white-50 text-decoration-none d-block">vegaproducciones</a>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <strong>Ticketera oficial</strong><br>
                    <a href="https://altoketicket.com.pe/" target="_blank"
                        class="text-white-50 text-decoration-none d-block mt-2">altoketicket.com.pe</a>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <strong>Dirección</strong><br>
                    <a href="https://www.google.com/maps/place/Arena+Lima+Norte/@-12.0131092,-77.0846419,21z/data=!4m15!1m8!3m7!1s0x9105ce93d0599bf9:0x15a0732924934b37!2sAv.+Tom%C3%A1s+Valle+1933,+San+Mart%C3%ADn+de+Porres+15107!3b1!8m2!3d-12.013083!4d-77.0846679!16s%2Fg%2F11snq02bpt!3m5!1s0x9105cf0039d6ec7b:0x1a8e2332a6b17b5!8m2!3d-12.0130772!4d-77.0845438!16s%2Fg%2F11x6vmb875?entry=ttu&g_ep=EgoyMDI1MDQyMi4wIKXMDSoASAFQAw%3D%3D"
                        target="_blank" class="text-white-50 text-decoration-none d-block mt-2">Av. Tomás Valle 1933,
                        San Martín
                        de Porres 15107 (Maps →)</a>
                </div>
            </div>

            <!-- Créditos -->
            <p class="mt-4 text-muted small">©2025. Respaldado por Vega Producciones.</p>
        </div>
    </footer>


    <!-- Core -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- Theme JS -->
    <script src="../assets/js/corporate-ui-dashboard.min.js"></script>
    <script src="../../assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>



    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>


    <script src="../../assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script src="index.js"></script>
</body>

</html>