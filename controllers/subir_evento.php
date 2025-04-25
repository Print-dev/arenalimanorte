<?php
require '../vendor/autoload.php';

use Cloudinary\Cloudinary;
use Cloudinary\Configuration\Configuration;

header('Content-Type: application/json');

try {
    // Configura Cloudinary con tus credenciales
    Configuration::instance([
        'cloud' => [
            'cloud_name' => 'dynpy0r4v',
            'api_key'    => '722279687758731',
            'api_secret' => 'KsLk7dNUAAjRYEBNUsv2JAV7cPI'
        ],
        'url' => [
            'secure' => true
        ]
    ]);

    $cloudinary = new Cloudinary();

    if (!isset($_FILES['imagenEvento'])) {
        throw new Exception("No se recibió ninguna imagen.");
    }

    // Subir la imagen
    $uploadResult = $cloudinary->uploadApi()->upload($_FILES['imagenEvento']['tmp_name'], [
        'folder' => 'eventos_arenalimanorte' // carpeta opcional en Cloudinary
    ]);

    // Obtener otros datos
    $link = $_POST['linkEvento'] ?? '';
    $presentado = $_POST['presentado'] ?? '0';

    // Aquí podrías guardar en base de datos el resultado
    // Ejemplo:
    // guardarEventoEnDB($uploadResult['secure_url'], $link, $presentado);

    echo json_encode([
        'success' => true,
        'image_url' => $uploadResult['secure_url'],
        'message' => 'Imagen subida correctamente'
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
