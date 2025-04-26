<?php
$hostOnlyHeader = "http://localhost/arenalimanorte";
session_start();

//print_r( $_SESSION['login']);
$usuario = $_SESSION['login']['nom_usuario'];
$listaAcceso = $_SESSION['login']['accesos'];

ini_set('display_errors', 0); // No mostrar errores en pantalla
ini_set('log_errors', 1); // Activar log de errores
ini_set('error_log', '../error.log'); // Establecer ruta del log

error_reporting(E_ALL); // Registrar todos los errores

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arena Lima Norte</title>
  <link rel="icon" id="link-meta" type="image/png" href="../images/icono.png">

  <!-- Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous" />
  <!-- Font API GOOGLE -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


  <!-- Volt CSS -->
  <link type="text/css" href="<?= $hostOnlyHeader ?>/css/dashboard/volt.css" rel="stylesheet" />
  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="<?= $hostOnlyHeader ?>/css/global.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- jKanban CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jkanban@1.2.0/dist/jkanban.min.css">

  <!-- list-usuario -->
  <link rel="stylesheet" href="<?= $hostOnlyHeader ?>/css/usuarios/list-usuario.css">
  <link rel="stylesheet" href="<?= $hostOnlyHeader ?>/css/usuarios/registrar-usuario.css">

  <!-- activo -->
  <!-- <link rel="stylesheet" href="<?= $hostOnlyHeader ?>/css/activos/lista-activo.css">
  <link rel="stylesheet" href="<?= $hostOnlyHeader ?>/css/activos/registrar-activo.css"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">

  <!-- JQUERY DATATABLES -->
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

  <!-- Bajas -->
  <!-- <link rel="stylesheet" href="<?= $hostOnlyHeader ?>/css/baja-activo.css"> -->

  <!-- JQUERY -->

  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <link
    rel="stylesheet"
    href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="<?= $hostOnlyHeader ?>/css/global.css">


</head>
<style>
  #encabezado-titulo {
    font-family: "Outfit", serif;
    font-weight: 400;
    font-style: normal;

  }


  #links {
    color: #000;
    display: flex;
    align-items: center;
    /* Mantener tamaño fijo */
    padding: 10px;
    /* Ajuste uniforme */
    transition: background-color 0.1s, color 0.1s;
  }

  #links:hover {
    background-color: #ffcc00;
    color: black;
    font-weight: bold;
  }

  .sidebar-text {
    flex-grow: 1;
    /* Hace que el texto ocupe el espacio disponible */
    white-space: nowrap;
    /* Evita que el texto se mueva de línea */
  }

  .toggle-icon {
    transition: transform 0.1s ease;
    margin-left: auto;
    /* Empuja el icono a la derecha */
  }

  /* Evitar desplazamiento al abrir dropdown */
  .sidebar-item .collapse {
    transition: none !important;
    /* Evita movimientos raros */
    margin-left: 0 !important;
    padding-left: 0 !important;
  }

  .beta-banner {
    width: 100%;
    background-color: #ffcc00;
    color: #000;
    text-align: center;
    padding: 10px;
    font-weight: bold;
  }

  .notificacion-item {
    background: #f8f9fa;
    padding: 10px;
    margin: 5px 0;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
  }

  .notificacion-item:hover {
    background: #e9ecef;
  }

  #options-sidebar {
    max-height: 400px;
    /* Ajusta la altura máxima */
    overflow-y: auto;
    /* Agrega scroll vertical */
    overflow-x: hidden;
    /* Oculta el scroll horizontal */
    scrollbar-width: thin;
    scrollbar-color: #888 #f1f1f1;
  }

  /* Evitar que los elementos internos causen desbordamiento */
  #options-sidebar li {
    white-space: nowrap;
    /* Evita que los elementos se expandan horizontalmente */
    overflow: hidden;
    text-overflow: ellipsis;
    /* Opcional: agrega "..." si el texto es muy largo */
  }

  /* Para navegadores basados en WebKit (Chrome, Safari, Edge) */
  #options-sidebar::-webkit-scrollbar {
    width: 8px;
  }

  #options-sidebar::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  #options-sidebar::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
  }

  #options-sidebar::-webkit-scrollbar-thumb:hover {
    background: #555;
  }
</style>
<!-- <div class="beta-banner">Vega Producciones V.1.0</div> -->

<body style="background-color: #FFFFFA; ">

  <!-- BOTON HAMBURGUESA EN RESPONSIVE -->
  <nav class="navbar navbar-light bg-white px-4 col-12 d-lg-none" style="box-shadow: 0px 2px 17px -8px rgba(0,0,0,0.27);
    -webkit-box-shadow: 0px 2px 17px -8px rgba(0,0,0,0.27);
    -moz-box-shadow: 0px 2px 17px -8px rgba(0,0,0,0.27);">
    <div class="d-flex align-items-center ms-auto">
      <button
        class="navbar-toggler d-lg-none collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
        style=" border: 1px solid black;">
        <span class="navbar-toggler-icon" style="background-color: white;"></span>
      </button>
    </div>
  </nav>
  <!-- BOTON HAMBURGUESA EN RESPONSIVE-->

  <!-- SIDEBAR -->
  <nav
    id="sidebarMenu"
    class="sidebar d-lg-block bg-white text-white collapse "
    data-simplebar>
    <div class=" px-4 pt-3"> <!-- sidebar-inner -->
      <div
        class="d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="collapse-close d-md-none">
          <a
            href="#sidebarMenu"
            data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu"
            aria-controls="sidebarMenu"
            aria-expanded="true"
            aria-label="Toggle navigation">
            <svg
              class="icon icon-xs"
              fill="dark"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
      <!-- OPCIONES SIDEBAR -->
      <ul class="nav flex-column pt-3 pt-md-0" id="options-sidebar" style="height: auto; max-height: 1500px; overflow-y: auto;">
        <li class="nav-item mb-3">
          <a class="nav-link bg-white d-flex align-items-center" href="<?= $hostOnlyHeader ?>/admin/gestion/listar-eventos">
            <span class="sidebar-icon me-2">
              <img
                src="https://res.cloudinary.com/dynpy0r4v/image/upload/v1744859794/arenalimanorte/oincvsofctmbhuoqnhlc.png"
                alt="Logo"
                class="rounded"
                style="width: 90px; object-fit: cover;">
            </span>
            <span class="sidebar-text text-dark" id="encabezado-titulo">Administrar</span>
          </a>
        </li>
        <?php
        foreach ($listaAcceso as $access) {
          if ($access['visible'] && $access['modulo'] !== "gestion") {

            echo "
              <li class='nav-item' >
                <a href='{$hostOnlyHeader}/admin/{$access['modulo']}/{$access['ruta']}' class='nav-link' id='links'>
                  <i class='{$access['icono']}'></i>
                  <span class='sidebar-text mx-2'>{$access['texto']}</span>
                </a>
              </li>";
          } else if ($access['modulo'] === "gestion" && $access['visible']) {
            echo "
              <li class='sidebar-item nav-item'>
                <a href='#' class='sidebar-link collapsed nav-link sidebar-text d-flex align-items-center' data-bs-toggle='collapse' id='links' data-bs-target='#gestion'
                  aria-expanded='false' aria-controls='gestion'>
                  <i class='{$access['icono']}'></i>
                  <span class='sidebar-text mx-2'>{$access['texto']}</span>
                  <i class='fa-solid fa-angle-down ms-auto mt-2 toggle-icon'></i>
                </a>              
              </li> 
              <ul id='gestion' class='sidebar-dropdown list-unstyled collapse' data-bs-parent='#gestion'>";

            foreach ($listaAcceso as $subAccess) {
              if (!$subAccess['visible'] && $subAccess['modulo'] === "gestion" && !empty($subAccess['texto']) && !empty($subAccess['icono'])) {
                echo "
                <li class='sidebar-item nav-item list-gestion'>
                  <a href='{$hostOnlyHeader}/admin/{$subAccess['modulo']}/{$subAccess['ruta']}' class='sidebar-link nav-link sidebar-text ms-4' id='links'>
                    <i class='{$subAccess['icono']}'></i>
                    <span class='sidebar-text mx-2'>{$subAccess['texto']}</span>
                  </a>
                </li>";
              }
            }
            echo "</ul>";
          }
        }
        ?>


      </ul>
      <!--/ OPCIONES SIDEBAR -->
    </div>
  </nav>
  <!-- FIN SIDEBAR -->

  <main class="content">
    <!-- NAVBAR-HEADER -->
    <nav
      class="navbar navbar-top navbar-expand ps-0 pb-0 mb-5">
      <div class="container-fluid px-0">
        <div
          class="d-flex justify-content-between w-100"
          id="navbarSupportedContent">
          <div class="d-flex align-items-center"></div>
          <!-- Navbar links (PERFIL USUARIO) -->
          <ul class="navbar-nav align-items-center">
            <!-- LOGO NOTIFICACION -->

            <!-- FIN LOGO NOTIFICACION -->

            <!-- USER - LOGOUT -->

            <li class="">
              <a class="dropdown-item d-flex align-items-center bg-danger rounded text-white" href="<?= $hostOnlyHeader ?>/controllers/usuario.controller.php?operation=destroy">
                <svg
                  class="dropdown-icon text-danger me-2"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                Cerrar Sesión
              </a>
            </li>
            <!-- FIN USER - LOGOUT -->
          </ul>

        </div>
      </div>
    </nav>

    <div class="modal fade" id="modal-notificacion" tabindex="-1" aria-labelledby="modalnotificacion" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalnotificacion">Detalles</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="contenedor-notificacion p-3">

            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- /NAVBAR-HEADER -->
    <script>
      const idusuarioLogeado = "<?php echo $_SESSION['login']['idusuario']; ?>"
      const nivelacceso = "<?php echo $_SESSION['login']['nivelacceso']; ?>"
      const rucEmpresa = "<?php echo $_SESSION['login']['ruc']; ?>"
      const razonsocialEmpresa = "<?php echo $_SESSION['login']['razonsocial']; ?>"
    </script>
    <script>
      document.querySelectorAll('.sidebar-item').forEach(item => {
        item.addEventListener('click', function() {
          const icon = this.querySelector('.toggle-icon'); // Selecciona el ícono dentro del <li>
          if (icon?.classList.contains('fa-angle-down')) {
            icon?.classList.remove('fa-angle-down');
            icon?.classList.add('fa-angle-up');
          } else {
            icon?.classList.remove('fa-angle-up');
            icon?.classList.add('fa-angle-down');
          }
        });
      });

      /* document.querySelector("#configurar-perfil").addEventListener("click", () => {
        window.localStorage.clear()
        window.localStorage.setItem("idusuario", idusuarioLogeado)
        window.location.href = `${hostOnly}/admin/utilitario/usuarios/actualizar-usuario`
        return
      })

      if (Notification.permission === "granted") {
        console.log("Permiso ya concedido.");
      } else if (Notification.permission !== "denied") {
        Notification.requestPermission().then(permission => {
          if (permission === "granted") {
            console.log("Permiso concedido.");
          }
        });
      } */
      /* function mostrarNotificacionViatico() {
        if (Notification.permission === "granted") {
          new Notification("¡Nueva Notificación!", {
            body: "Permiso Concedido (Mnesaje de prueba).",
            icon: "https://res.cloudinary.com/dynpy0r4v/image/upload/v1742818076/vegaimagenes/esawybumfjhhujupw5pa.png", // Puedes cambiar el icono
          });
        } else {
          console.log("El usuario no concedió permisos.");
        }
      } */

      /* mostrarNotificacion() */
      /* document.querySelector("#show-all-notificaciones").addEventListener("click", ()=>{

      }) */
    </script>