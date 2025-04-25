

<?php
require_once '../models/Complemento.php';
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Encabezados permitidos
$complemento = new Complemento();
// ag order by
if (isset($_GET['operation'])) {
  switch ($_GET['operation']) {
    case 'obtenerEventos':
      echo json_encode($complemento->obtenerEventos());
      break;
  }
}

if (isset($_POST['operation'])) {
  switch ($_POST['operation']) {
    case 'registrarComprobante':
      $cleanData = [
        'imagen'   => $complemento->limpiarCadena($_POST['imagen']),
        'link'   => $complemento->limpiarCadena($_POST['link'])       
      ];

      $rpt = $complemento->registrarComprobante($cleanData);

      echo json_encode($rpt);
      break;

  }
}
