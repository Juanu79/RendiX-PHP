<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Dirección</title>
    <link rel="stylesheet" href="../CSS/Style-form.css">
    <script src="Botones.js"></script>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="../IMAGENES/RendiX-transformed.png" alt="Logo de Rendix">
        </div>
    </header>

    <div class="login-card">
        <h2>Registro de Dirección de Vivienda</h2>
        <form id="form-direccion" onsubmit="Opc3(event)">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required>
            <input type="text" id="direccion" name="direccion" placeholder="Dirección" required>
            <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" required>
            <input type="text" id="codigo-postal" name="codigo-postal" placeholder="Código Postal" required>
            <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>
            <button type="submit">Registrar Dirección</button>
        </form>
    </div>
</body>
</html>
