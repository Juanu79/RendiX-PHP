<?php
// modelo/Pqrs.php

require_once '../config/conexion.php'; 

class Pqrs {
    public static function guardar($nombre, $email, $comentario) {
        try {
            $conexion = Conexion::conectar();
            $sql = "INSERT INTO quejas (nombre, email, comentario, fecha) VALUES (:nombre, :email, :comentario, NOW())";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':comentario', $comentario);
            return $stmt->execute(); // Devuelve true si se guarda correctamente
        } catch (PDOException $e) {
            error_log("Error al guardar PQRS: " . $e->getMessage());
            return false;
        }
    }
}
