<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito</title>
  <link rel="stylesheet" href="../CSS/carr.css">
  <link rel="stylesheet" href="../CSS/Style.css">
</head>
<body>
  <header>
    <h1>Tu Carrito</h1>
    <a href="index.html">
      <img src="../IMAGENES/RendiX.jpg" alt="rendix" class="imgr">
    </a>
  </header>

  <main>
    <div id="productos-carrito">
      <p>No hay productos en tu carrito aún.</p>
    </div>
    <button onclick="vaciarCarrito()">Vaciar carrito</button>
  </main>

 <script>
  document.addEventListener("DOMContentLoaded", function () {
    const contenedor = document.getElementById("productos-carrito");
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    let total = 0;

    if (carrito.length === 0) {
      contenedor.innerHTML = "<p>No hay productos en tu carrito aún.</p>";
    } else {
      contenedor.innerHTML = "";
      carrito.forEach(producto => {
        total += producto.precio;

        // Ajustar ruta de imagen para que tenga ../ al inicio si no lo tiene
        let imagenPath = producto.imagen;
        if (!imagenPath.startsWith("../") && !imagenPath.startsWith("/")) {
          imagenPath = "../" + imagenPath;
        }

        const div = document.createElement("div");
        div.classList.add("producto-en-carrito");
        div.innerHTML = `
          <img src="${imagenPath}" alt="${producto.nombre}" width="100">
          <h3>${producto.nombre}</h3>
          <p>Tipo de entrega: ${producto.tipoEntrega}</p>
          <p>Precio: $${producto.precio.toLocaleString()}</p>
        `;
        contenedor.appendChild(div);
      });

      const totalDiv = document.createElement("div");
      totalDiv.innerHTML = `
        <h2>Total a pagar: $${total.toLocaleString()}</h2>
        <button onclick="redirigirPago()">Pagar</button>
      `;
      contenedor.appendChild(totalDiv);
    }
  });

  function vaciarCarrito() {
    localStorage.removeItem("carrito");
    location.reload();
  }

  function redirigirPago() {
    window.location.href = "pago.php";
  }
</script>

</body>
</html>
