paypal.Buttons({
  createOrder: function (data, actions) 
  {
    
    return actions.order.create({
      
      intent: "CAPTURE",
      purchase_units: [{
        
        amount: {
          currency_code: "USD",
          value: "100",
          breakdown: {
            item_total: {
              currency_code: "USD",
              value: "100"
            }
          }
        },
        items: [{
          name: "T-Shirt",
          description: "Super Fresh Shirt",
          unit_amount: {
            currency_code: "USD",
            value: "100"
          },
          quantity: "1",
          category: "PHYSICAL_GOODS",
          sku: "sku01"
        }]
      }]
    });
  },
  onApprove: function (data, actions) {
  return actions.order.capture().then(function (details) {
    // Mostrar el mensaje personalizado
    const alerta = document.getElementById('pago-aprobado');
    alerta.classList.remove('oculto');

    // Redirigir después de 3 segundos
    setTimeout(() => {
      window.location.href = 'Pedido-Preparacion.html';
    }, 3000);

    console.log(details); // Aquí puedes guardar los datos si quieres
  });
  },
  onError: function (err) {
    console.error("Error en PayPal:", err);
    alert("Hubo un error con el pago. Inténtalo de nuevo.");
  }
}).render('#paypal-button-container');
