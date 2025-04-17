<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arena Lima Norte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dynpy0r4v/image/upload/v1744848217/arenalimanorte/z1yjapubxokft2dmvodw.png" type="image/x-png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <style>
        /* Contenedor del carrusel que ocupa todo el ancho */
        .carousel-container {
            width: 100vw;
            /* 100% del ancho de la pantalla */
            overflow: hidden;
            display: flex;
            justify-content: center;
            padding: 20px 0;
        }

        /* Carrusel con imágenes en fila */
        .carousel {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        /* Imágenes en formato vertical */
        .carousel img {
            width: 300px;
            /* Ancho fijo */
            height: 460px;
            /* Alto fijo */
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>

<body class="bg-black text-white">

    <section>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg shadow">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="https://res.cloudinary.com/dynpy0r4v/image/upload/v1744848217/arenalimanorte/z1yjapubxokft2dmvodw.png" width="60" alt="Logo">
                </a>

                <!-- Botón de menú para móviles -->
                <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Enlaces del Navbar -->
                <div class="collapse navbar-collapse justify-content-start px-3" id="navbarNav">
                    <ul class="navbar-nav gap-3">
                        <li class="nav-item"><a class="nav-link text-white" href="#">Arena Lima Norte</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#">Quienes </a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-white" href="#">Precios</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#">Blog</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#">Soporte</a></li>
                    </ul>
                </div>

                <!-- Botones -->
                <div class="d-flex gap-3">
                    <button class="btn text-white p-3 rounded-5">Iniciar sesión</button>
                    <button class="btn btn-light text-black p-3 rounded-5">Registrarse</button>
                </div>
            </div>
        </nav>

        <!-- Texto centrado debajo del navbar -->
        <!--  -->
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>