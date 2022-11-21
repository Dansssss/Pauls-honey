<div id="paypal-button-container"></div>
<script
    src="https://www.paypal.com/sdk/js?client-id=AXcyU9du1QzR4MxJknNF-hV4XZBQSDV6GGW47oIrIat_FC_BflUo2sNujfmQ3LUtYB1LSu4SxcW6r9LU&currency=AUD"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
</script>
<script>
    var cartTotal = '<?= $this->Number->format($product->price) ?>'
    paypal.Buttons({
        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        currency_code: "AUD",
                        value: cartTotal
                    }
                }]
            });
        },
        
    }).render('#paypal-button-container');
</script>
