<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMA DE ENTREGA</title>
      <!-- Enlace al archivo de estilos CSS -->
      <link rel="stylesheet" href="../CSS/Style.css">
      <script src="../JS/Botones.js"></script>
</head>
<body>
     <!-- Inicio del encabezado de la página -->
     <header>
        <div class="container">
          <div class="logo">
            <!-- Imagen del logo de RendiX -->
            <img src="../IMAGENES/RendiX.jpg" alt="Logo de Rendix">
          </div>
          
          
        </div>
    </header>
    
    <!-- Título y descripción de la página -->
    <h3 id="l1">ELIGE LA FORMA DE ENTREGA DEL PRODUCTO</h3>
    <!-- Contenedor principal para los métodos de pago -->
    <div class="metcards-container">

        <!-- Primer bloque de método de pago: Contra Entrega -->
        <div class="Bloque1">
          <div class="metcard">
            <div class="meta">
              <!-- Título y subtítulo del método de pago -->
              <span class="mettitle">ENVIAR A</span>
              <span class="price">domicilio</span>
              <br>
            <br>
              <!-- Imagen representativa del método de pago -->
              <img src="../IMAGENES/pngegg.png" alt="DOMICILIO" width="100">
            </div>
            <br>
            <br>
            <!-- Descripción del método de pago -->
            <p class="desc">Enviar a domicilio es un servicio que permite recibir productos directamente en tu hogar, facilitando los alquileres y eliminando la necesidad de ir a un punto fisico</p>
            <!-- Botón para continuar con este método de pago -->
            <br>
            <br>
            <button onclick="Opc4()" class="action">continuar</button>
          </div>
        </div>
  
        <!-- Segundo bloque de método de pago: Tarjeta Bancaria -->
        <div class="Bloque2">
          <div class="metcard">
            <div class="meta">
              <span class="mettitle">Retirar En </span>
              <span class="price">Punto De Entrega</span>
              <img src="../IMAGENES/1757493.png" alt="Lavadora-Haceb" width="100">
            </div>
            <p class="desc">Retirar en punto de entrega es un servicio que permite a los clientes recoger sus productos de alquiler en un lugar designado, brindando flexibilidad para quienes prefieren recoger sus compras a su conveniencia.</p>
  
            <button onclick="Opc5()" class="action">continuar</button>
          </div>
        </div>
      </div> <!-- Fin del contenedor principal de métodos de pago -->
      <footer>
        <h4>Contáctanos</h4>
        <p><strong>Email:</strong> contacto@rendix.com</p>
        <p><strong>Teléfono:</strong> +57 318 341 4381</p>
        <p><strong></strong> Compañia 100% Colombiana</p>
        <p>&copy; 2024 Rendix. Todos los derechos reservados.</p>
      </footer>
    </body>
</html>
