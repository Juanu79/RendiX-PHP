<?php
// controlador/CalificacionController.php

// Importa el archivo del modelo donde se encuentra la clase Calificacion
require_once '../modelo/Calificacion.php';

// Verifica si la solicitud que llega al servidor es de tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtiene los datos enviados desde el formulario mediante POST
    // Si alguna variable no se recibe, se asigna un valor por defecto
    $nombre = $_POST['name'] ?? '';           // Nombre del usuario
    $correo = $_POST['email'] ?? '';          // Correo electrónico del usuario
    $producto = $_POST['product'] ?? '';      // Nombre del producto que se está calificando
    $comentario = $_POST['comment'] ?? '';    // Comentario del usuario
    $estrellas = $_POST['rating'] ?? 0;       // Valor numérico de estrellas (ej: 1 a 5)

    // Llama al método guardar() del modelo Calificacion, pasándole los datos recibidos
    $resultado = Calificacion::guardar($nombre, $correo, $producto, $comentario, $estrellas);

    // Si el resultado de guardar() fue exitoso (true), responde con JSON indicando éxito
    if ($resultado) {
        echo json_encode([
            'success' => true,
            'message' => 'Valoración guardada con éxito.'
        ]);
    } else {
        // Si ocurrió un error, responde con JSON indicando fallo
        echo json_encode([
            'success' => false,
            'message' => 'Error al guardar la valoración.'
        ]);
    }
}
?>
