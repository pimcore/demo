

$(document).ready(function() {

    let unzerInstance = new unzer(_config.accessKey, {locale: 'en-GB'});

    let $errorHolder = $('#error-holder');

    let Card = unzerInstance.Card();
    // Rendering input fields
    Card.create('number', {
        containerId: 'card-element-id-number',
        onlyIframe: false
    });
    Card.create('expiry', {
        containerId: 'card-element-id-expiry',
        onlyIframe: false
    });
    Card.create('cvc', {
        containerId: 'card-element-id-cvc',
        onlyIframe: false
    });

    let ccForm = document.getElementById('cc-form');
    let submitPaymentResultForm = document.getElementById('js-submit-payment-result');

    // General event handling
    let buttonDisabled = {};
    let submitButton = document.getElementById('submit-button');
    submitButton.disabled = true;


    let successHandler = function(data) {
        console.log('success');
        data.method = data.method ? data.method : 'card';
        $('.js-payment-method-hidden').val(data.method);
        $('.js-payment-id-hidden').val(data.id);

        submitPaymentResultForm.submit();
    };

    let errorHandler = function(error) {
        console.log('error');
        $errorHolder.html(error.message);
    };

    Card.addEventListener('change', function(e) {
        if (e.success) {
            buttonDisabled[e.type] = true;
            submitButton.disabled = false;
            $errorHolder.html('')
        } else {
            buttonDisabled[e.type] = false;
            submitButton.disabled = true;
            $errorHolder.html(e.error)
        }
        submitButton.disabled = !(buttonDisabled.number && buttonDisabled.expiry && buttonDisabled.cvc);

    });


    ccForm.addEventListener('submit', function(event) {
        event.preventDefault();
        console.log('creditcard form submit');
        Card.createResource()
            .then(successHandler)
            .catch(errorHandler)
    });


    $('#js-redirect-payment-method-paypal').on('click', function(e){
        e.preventDefault();

        var Paypal = unzerInstance.Paypal();

        Paypal.createResource()
            .then(successHandler)
            .catch(errorHandler)
    });

    $('#js-redirect-payment-method-paypal-sofort').on('click', function(e){
        e.preventDefault();

        let Sofort = unzerInstance.Sofort();

        Sofort.createResource()
            .then(successHandler)
            .catch(errorHandler)
    });


});

