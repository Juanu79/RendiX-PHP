<?php
// Mostrar errores si ocurre alguno
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Importar conexión correctamente
require_once '../config/conexion.php';

try {
    $conn = Conexion::conectar();
    echo "<h2 style='color: green;'>✅ Conexión exitosa a la base de datos</h2>";
} catch (Exception $e) {
    echo "<h2 style='color: red;'>❌ Error de conexión: " . $e->getMessage() . "</h2>";
}
?>
