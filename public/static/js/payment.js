paypal.Buttons({
    onCancel: function (data) {
        // e.g. redirect to a certain page or show message
        window.location.replace('/payment-error');
    },
    onError: function (data) {
        // e.g. redirect to a certain page or show message
        window.location.replace('/payment-error');
    },
    createOrder: function(data, actions) {
        return fetch('/checkout-start-payment', {
            method: 'post',
            headers: {
                'content-type': 'application/json'
            }
        }).then(function(res) {
            return res.json();
        }).then(function (data) {
            return data.id;
        });
    },
    onApprove: function(data) {
        // make sure you deliver orderID, payerID and paymentID to your
        // handle response controller action, e.g. by creating a form and
        // posting the data
        var form = document.createElement('form');
        document.body.appendChild(form);
        form.method = 'POST';
        form.action = '/payment-commit-order';

        var orderID = document.createElement('input');
        orderID.type = 'hidden';
        orderID.name = 'orderID';
        orderID.value = data['orderID'];
        form.appendChild(orderID);

        var payerID = document.createElement('input');
        payerID.type = 'hidden';
        payerID.name = 'payerID';
        payerID.value = data['payerID'];
        form.appendChild(payerID);

        var paymentID = document.createElement('input');
        paymentID.type = 'hidden';
        paymentID.name = 'paymentID';
        paymentID.value = data['paymentID'];
        form.appendChild(paymentID);

        form.submit();
    }
}).render('#paypal-button-container');