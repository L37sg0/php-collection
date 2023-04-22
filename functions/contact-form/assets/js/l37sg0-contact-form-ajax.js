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
                console.log(response);
                $('.js-form-submission').removeClass('js-show-feedback');
                $('.js-form-error').addClass('js-show-feedback');
                form.find('input, button, textarea').removeAttr('disabled');
            },

            success: function (response) {
                console.log(response);
                if (response === 0) {

                    setTimeout(function () {
                        $('.js-form-submission').removeClass('js-show-feedback');
                        $('.js-form-error').addClass('js-show-feedback');
                        form.find('input, button, textarea').removeAttr('disabled');
                    }, 1500);

                } else {

                    setTimeout(function () {
                        $('.js-form-submission').removeClass('js-show-feedback');
                        $('.js-form-success').addClass('js-show-feedback');
                        form.find('input, button, textarea').removeAttr('disabled').val('');
                    }, 1500);
                }
            }
        });
    });
});