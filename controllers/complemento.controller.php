

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

    case 'obtenerExperiencias':
      echo json_encode($complemento->obtenerExperiencias());
      break;

    case 'obtenerEventosPresentados':
      echo json_encode($complemento->obtenerEventosPresentados());
      break;

    case 'obtenerExperienciasPresentados':
      echo json_encode($complemento->obtenerExperienciasPresentados());
      break;

    case 'obtenerEventoPorId':
      $cleanData = [
        'idevento' => $_GET['idevento'] === "" ? null : $_GET['idevento']
      ];
      echo json_encode($complemento->obtenerEventoPorId($cleanData));
      break;

    case 'obtenerExperienciaPorId':
      $cleanData = [
        'idexperiencia' => $_GET['idexperiencia'] === "" ? null : $_GET['idexperiencia']
      ];
      echo json_encode($complemento->obtenerExperienciaPorId($cleanData));
      break;
  }
}

if (isset($_POST['operation'])) {
  switch ($_POST['operation']) {
    case 'registrarEvento':
      try {
        // Configura Cloudinary correctamente
        $cloudinary = new Cloudinary(
          [
            'cloud' => [
              'cloud_name' => 'dynpy0r4v',
              'api_key'    => '722279687758731',
              'api_secret' => 'KsLk7dNUAAjRYEBNUsv2JAV7cPI'
            ],
            'url' => [
              'secure' => true
            ]
          ]
        );

        // Validar si hay imagen
        if (!isset($_FILES['imagenEvento']) || $_FILES['imagenEvento']['error'] !== UPLOAD_ERR_OK) {
          throw new Exception("No se recibió ninguna imagen o hubo un error en la carga.");
        }

        // Subir imagen
        $uploadResult = $cloudinary->uploadApi()->upload(
          $_FILES['imagenEvento']['tmp_name'],
          ['folder' => 'eventos_arenalimanorte']
        );

        // Obtener URL de la imagen subida
        $secureUrl = $uploadResult['public_id'] ?? null;

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

    case 'registrarExperiencia':
      try {
        // Configura Cloudinary correctamente
        $cloudinary = new Cloudinary(
          [
            'cloud' => [
              'cloud_name' => 'dynpy0r4v',
              'api_key'    => '722279687758731',
              'api_secret' => 'KsLk7dNUAAjRYEBNUsv2JAV7cPI'
            ],
            'url' => [
              'secure' => true
            ]
          ]
        );

        // Validar si hay imagen
        if (!isset($_FILES['imagenExperiencia']) || $_FILES['imagenExperiencia']['error'] !== UPLOAD_ERR_OK) {
          throw new Exception("No se recibió ninguna imagen o hubo un error en la carga.");
        }

        // Subir imagen
        $uploadResult = $cloudinary->uploadApi()->upload(
          $_FILES['imagenExperiencia']['tmp_name'],
          ['folder' => 'experiencias_arenalimanorte']
        );

        // Obtener URL de la imagen subida
        $secureUrl = $uploadResult['public_id'] ?? null;

        if (!$secureUrl) {
          throw new Exception("No se pudo obtener la URL de la imagen.");
        }

        // Sanitizar y preparar datos
        $cleanData = [
          'imagen'      => $complemento->limpiarCadena($secureUrl),
          'presentado'  => $complemento->limpiarCadena($_POST['presentado']),
        ];

        // Guardar en base de datos
        $rpt = $complemento->registrarExperiencia($cleanData);

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

    case 'actualizarPresentadoEvento':
      $cleanData = [
        'idevento'        => $complemento->limpiarCadena($_POST['idevento']),
        'presentado'        => $complemento->limpiarCadena($_POST['presentado'])
      ];
      // Guardar en base de datos
      $rpt = $complemento->actualizarPresentadoEvento($cleanData);

      echo json_decode($rpt);
      break;

    case 'actualizarPresentadoExperiencia':
      $cleanData = [
        'idexperiencia'        => $complemento->limpiarCadena($_POST['idexperiencia']),
        'presentado'        => $complemento->limpiarCadena($_POST['presentado'])
      ];
      // Guardar en base de datos
      $rpt = $complemento->actualizarPresentadoExperiencia($cleanData);

      echo json_decode($rpt);
      break;

    case 'eliminarEvento':
      try {
        $cloudinary = new Cloudinary(
          [
            'cloud' => [
              'cloud_name' => 'dynpy0r4v',
              'api_key'    => '722279687758731',
              'api_secret' => 'KsLk7dNUAAjRYEBNUsv2JAV7cPI'
            ],
            'url' => [
              'secure' => true
            ]
          ]
        );

        // Obtener el ID del evento que se va a actualizar


        $imagenPublicId = $_POST['imagenObtenido']; // Asumiendo que guardamos el public_id

        if (!empty($imagenPublicId)) {
          $cloudinary->uploadApi()->destroy($imagenPublicId);
        }

        $cleanData = [
          'idevento'        => $complemento->limpiarCadena($_POST['idevento']),
        ];
        // Guardar en base de datos
        $rpt = $complemento->eliminarEvento($cleanData);

        echo json_encode([
          'success' => true,
          'message' => 'Evento eliminado exitosamente.',
          'data'    => $rpt
        ]);
      } catch (Exception $e) {
        echo json_encode([
          'success' => false,
          'message' => $e->getMessage()
        ]);
      }
      break;

    case 'eliminarExperiencia':
      try {
        $cloudinary = new Cloudinary(
          [
            'cloud' => [
              'cloud_name' => 'dynpy0r4v',
              'api_key'    => '722279687758731',
              'api_secret' => 'KsLk7dNUAAjRYEBNUsv2JAV7cPI'
            ],
            'url' => [
              'secure' => true
            ]
          ]
        );

        // Obtener el ID del evento que se va a actualizar


        $imagenPublicId = $_POST['imagenObtenido']; // Asumiendo que guardamos el public_id

        if (!empty($imagenPublicId)) {
          $cloudinary->uploadApi()->destroy($imagenPublicId);
        }

        $cleanData = [
          'idexperiencia'        => $complemento->limpiarCadena($_POST['idexperiencia']),
        ];
        // Guardar en base de datos
        $rpt = $complemento->eliminarExperiencia($cleanData);

        echo json_encode([
          'success' => true,
          'message' => 'Evento eliminado exitosamente.',
          'data'    => $rpt
        ]);
      } catch (Exception $e) {
        echo json_encode([
          'success' => false,
          'message' => $e->getMessage()
        ]);
      }
      break;

    case 'actualizarEvento':
      try {
        // Configura Cloudinary correctamente
        $cloudinary = new Cloudinary(
          [
            'cloud' => [
              'cloud_name' => 'dynpy0r4v',
              'api_key'    => '722279687758731',
              'api_secret' => 'KsLk7dNUAAjRYEBNUsv2JAV7cPI'
            ],
            'url' => [
              'secure' => true
            ]
          ]
        );

        // Obtener el ID del evento que se va a actualizar


        $imagenPublicId = $_POST['imagenObtenido']; // Asumiendo que guardamos el public_id
        error_log("Public ID de imagen anterior: " . $imagenPublicId);
        // Validar si hay imagen nueva
        if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] !== UPLOAD_ERR_OK) {
          throw new Exception("No se recibió ninguna imagen o hubo un error en la carga.");
        }

        // Eliminar la imagen anterior de Cloudinary si existe
        if (!empty($imagenPublicId)) {
          $cloudinary->uploadApi()->destroy($imagenPublicId);
        }

        // Subir la nueva imagen
        $uploadResult = $cloudinary->uploadApi()->upload(
          $_FILES['imagen']['tmp_name'],
          ['folder' => 'eventos_arenalimanorte']
        );

        // Obtener public_id de la imagen subida
        $secureUrl = $uploadResult['public_id'] ?? null;

        if (!$secureUrl) {
          throw new Exception("No se pudo obtener la URL de la imagen.");
        }

        // Sanitizar y preparar datos
        $datosActualizados = [
          "idevento" => $complemento->limpiarCadena($_POST['idevento']),
          'imagen'     => $complemento->limpiarCadena($secureUrl),
          'link'       => $complemento->limpiarCadena($_POST['link']),
          'presentado' => $complemento->limpiarCadena($_POST['presentado']),
        ];

        // Actualizar en la base de datos
        $rpt = $complemento->actualizarEvento($datosActualizados);

        echo json_encode([
          'success' => true,
          'message' => 'Evento actualizado exitosamente.',
          'data'    => $rpt
        ]);
      } catch (Exception $e) {
        echo json_encode([
          'success' => false,
          'message' => $e->getMessage()
        ]);
      }
      break;

    case 'actualizarExperiencia':
      try {
        // Configura Cloudinary correctamente
        $cloudinary = new Cloudinary(
          [
            'cloud' => [
              'cloud_name' => 'dynpy0r4v',
              'api_key'    => '722279687758731',
              'api_secret' => 'KsLk7dNUAAjRYEBNUsv2JAV7cPI'
            ],
            'url' => [
              'secure' => true
            ]
          ]
        );

        // Obtener el ID del evento que se va a actualizar


        $imagenPublicId = $_POST['imagenObtenido']; // Asumiendo que guardamos el public_id
        error_log("Public ID de imagen anterior: " . $imagenPublicId);
        // Validar si hay imagen nueva
        if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] !== UPLOAD_ERR_OK) {
          throw new Exception("No se recibió ninguna imagen o hubo un error en la carga.");
        }

        // Eliminar la imagen anterior de Cloudinary si existe
        if (!empty($imagenPublicId)) {
          $cloudinary->uploadApi()->destroy($imagenPublicId);
        }

        // Subir la nueva imagen
        $uploadResult = $cloudinary->uploadApi()->upload(
          $_FILES['imagen']['tmp_name'],
          ['folder' => 'experiencias_arenalimanorte']
        );

        // Obtener public_id de la imagen subida
        $secureUrl = $uploadResult['public_id'] ?? null;

        if (!$secureUrl) {
          throw new Exception("No se pudo obtener la URL de la imagen.");
        }

        // Sanitizar y preparar datos
        $datosActualizados = [
          "idexperiencia" => $complemento->limpiarCadena($_POST['idexperiencia']),
          'imagen'     => $complemento->limpiarCadena($secureUrl),
          'presentado' => $complemento->limpiarCadena($_POST['presentado']),
        ];

        // Actualizar en la base de datos
        $rpt = $complemento->actualizarExperiencia($datosActualizados);

        echo json_encode([
          'success' => true,
          'message' => 'Evento actualizado exitosamente.',
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
