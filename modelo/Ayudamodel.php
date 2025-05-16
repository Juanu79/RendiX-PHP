<?php
// modelo/ayuda.php

// Incluye el archivo que contiene la clase de conexión a la base de datos
require_once '../config/conexion.php'; 

// Se define la clase "ayuda" (representa el modelo para la tabla 'ayuda' en la base de datos)
class ayuda {

    // Método estático que guarda un registro en la tabla 'ayuda'
    public static function guardar($email, $mensaje) {
        try {
            // Se obtiene una conexión a la base de datos usando la clase Conexion
            $conexion = Conexion::conectar();

            // Se define la consulta SQL para insertar un nuevo registro en la tabla 'ayuda'
            $sql = "INSERT INTO ayuda (email, mensaje, fecha) VALUES (:email, :mensaje, NOW())";

            // Se prepara la consulta para evitar inyección SQL
            $stmt = $conexion->prepare($sql);

            // Se enlazan los parámetros a los valores recibidos
            $stmt->bindParam(':email', $email);       // Correo del usuario
            $stmt->bindParam(':mensaje', $mensaje);   // Mensaje escrito por el usuario

            // Ejecuta la consulta y devuelve true si se insertó correctamente
            return $stmt->execute();

        } catch (PDOException $e) {
            // En caso de error, se registra el mensaje en el log del servidor
            error_log("Error al guardar su solicitud: " . $e->getMessage());

            // Retorna false para indicar que hubo un fallo
            return false;
        }
    }
}
