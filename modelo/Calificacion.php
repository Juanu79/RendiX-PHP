<?php
// modelo/Calificacion.php

require_once '../config/conexion.php';
$conexion = Conexion::conectar();

class Calificacion {
    public static function guardar($nombre, $correo, $producto, $comentario, $estrellas) {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO calificaciones (nombre, correo, producto, comentario, estrellas) 
                VALUES (:nombre, :correo, :producto, :comentario, :estrellas)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':producto', $producto);
        $stmt->bindParam(':comentario', $comentario);
        $stmt->bindParam(':estrellas', $estrellas);
        return $stmt->execute();
    }
}
?>
