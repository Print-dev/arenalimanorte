

<?php
require_once '../models/Complemento.php';
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Encabezados permitidos
require '../vendor/autoload.php';
use Cloudinary\Cloudinary;
use Cloudinary\Configuration\Configuration;
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
    case 'registrarEvento':
      try {
        // Configura Cloudinary
        Configuration::instance([
          'cloud' => [
            'cloud_name' => 'dynpy0r4v',
            'api_key'    => '722279687758731',
            'api_secret' => 'KsLk7dNUAAjRYEBNUsv2JAV7cPI'
          ],
          'url' => ['secure' => true]
        ]);

        $cloudinary = new Cloudinary();

        // Validar si hay imagen
        if (!isset($_FILES['imagenEvento'])) {
          throw new Exception("No se recibió ninguna imagen.");
        }

        // Subir imagen
        $uploadResult = $cloudinary->uploadApi()->upload(
          $_FILES['imagenEvento']['tmp_name'],
          ['folder' => 'eventos_arenalimanorte']
        );

        // Obtener URL de la imagen subida
        $secureUrl = $uploadResult['secure_url'] ?? null;

        if (!$secureUrl) {
          throw new Exception("No se pudo obtener la URL de la imagen.");
        }

        // Sanitizar y preparar datos
        $cleanData = [
          'imagen'      => $complemento->limpiarCadena($secureUrl),
          'link'        => $complemento->limpiarCadena($_POST['linkEvento']),
          'presentado'  => $complemento->limpiarCadena($_POST['presentado']),
        ];

        // Guardar en base de datos
        $rpt = $complemento->registrarEvento($cleanData);

        echo json_encode([
          'success' => true,
          'message' => 'Evento registrado exitosamente.',
          'data'    => $rpt
        ]);
      } catch (Exception $e) {
        echo json_encode([
          'success' => false,
          'message' => $e->getMessage()
        ]);
      }
      break;
  }
}
