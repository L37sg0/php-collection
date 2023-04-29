    jQuery(document).ready(function ($) {
    $('#l37sg0ContactForm').on('submit', function (e) {
        e.preventDefault();
        $('.has-error').removeClass('has-error');
        $('.js-show-feedback').removeClass('js-show-feedback');

        let form = $(this),
            name = form.find('#name').val(),
            email = form.find('#email').val(),
            message = form.find('#message').val(),
            nonce = form.find('#nonce').val(),
            ajaxurl = form.data('url');

        if (name === '') {
            $('#name').parent('.form-group').addClass('has-error');
            return;
        }

        if (email === '') {
            $('#email').parent('.form-group').addClass('has-error');
            return;
        }

        if (message === '') {
            $('#message').parent('.form-group').addClass('has-error');
            return;
        }

        form.find('input, button, textarea').attr('disabled', 'disabled');
        $('.js-form-submission').addClass('js-show-feedback');


        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                name: name,
                email: email,
                message: message,
                nonce: nonce,
                action: 'l37sg0_theme_save_contact_message'
            },

            error: function (response) {
                $('.form-error-name').text('');
                $('.form-error-email').text('');
                $('.form-error-message').text('');
                $('.form-control-msg').removeClass('text-success').addClass('text-danger').text('Unauthorised');
                form.find('input, button, textarea').removeAttr('disabled').val('');
            },

            success: function (response) {
                if (response.success === true) {
                    $('.form-error-name').text('');
                    $('.form-error-email').text('');
                    $('.form-error-message').text('');

                    $('.form-control-msg').removeClass('text-danger').addClass('text-success').text(response.message);

                    setTimeout(function () {
                        form.find('input, button, textarea').removeAttr('disabled').val('');
                        $('.form-control-msg').text('')
                    }, 1500);

                } else {
                    $('.form-error-name').text('').text(response.errors.name);
                    $('.form-error-email').text('').text(response.errors.email);
                    $('.form-error-message').text('').text(response.errors.message);

                    $('.form-control-msg').removeClass('text-success').addClass('text-danger').text(response.message);

                    setTimeout(function () {
                        form.find('input, button, textarea').removeAttr('disabled');
                    }, 1500);
                }
            }
        });
    });
});