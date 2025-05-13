paypal.Buttons({
  createOrder: function (data, actions) {
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
      alert('Pago completado por ' + details.payer.name.given_name);
      console.log(details); // Aquí podrías guardar los datos en Firebase, mostrar recibo, etc.
    });
  },
  onError: function (err) {
    console.error("Error en PayPal:", err);
    alert("Hubo un error con el pago. Inténtalo de nuevo.");
  }
}).render('#paypal-button-container');
