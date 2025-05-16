<?php
// controlador/AyudaController.php

require_once '../modelo/Ayudamodel.php';

// Verifica que se reciba una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe los datos del formulario
    $email = $_POST['email'] ?? '';
    $mensaje = $_POST['mensaje'] ?? '';

    // Llama al método del modelo para guardar
    $resultado = ayuda::guardar($email, $mensaje);

    // Devuelve una respuesta en formato JSON
    if ($resultado) {
        echo json_encode(['success' => true, 'message' => 'Solicitud enviada con éxito.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al guardar su solicitud.']);
    }
}
?>