<?php
// controlador/CalificacionController.php

require_once '../modelo/Pqrsmodel.php'; 

// Verifica que se reciba una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe los datos del formulario
    $nombre = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $comentario = $_POST['comment'] ?? '';

    // Llama al método del modelo para guardar
    $resultado = Pqrs::guardar($nombre, $email, $comentario);

    // Devuelve una respuesta en formato JSON
    if ($resultado) {
        echo json_encode(['success' => true, 'message' => 'PQRS guardada con éxito.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al guardar la PQRS.']);
    }
}
?>