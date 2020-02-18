(function ($, window, document, undefined) {
    'use strict';

    var $form = $('#contact-form');

    $form.submit(function (e) {
        // remove the error class
        $('.form-group').removeClass('has-error');
        $('.help-block').remove();

        // get the form data
        var formData = {
            'name' : $('input[name="nombre"]').val(),
            'email' : $('input[name="email"]').val(),
            'subject' : $('input[name="asunto"]').val(),
            'message' : $('textarea[name="mensaje"]').val()
        };

        // process the form
        $.ajax({
            type : 'POST',
            url  : '/contacto/enviar2.php',
            data : formData,
            encode : true
        }).done(function (data) {

            console.log(data);

            // display success message
            $form.html('<div class="alert alert-success">' + data + '</div>');

        }).fail(function (data) {
            // for debug
            console.log(data)
        });

        e.preventDefault();
    });
}(jQuery, window, document));
