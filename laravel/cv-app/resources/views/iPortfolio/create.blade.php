@extends('iPortfolio.app')
@section('content')
{{--@include('iPortfolio.components.content.contact')--}}
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">


            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="/api/applicants" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" required>
                            <small class="text-danger form-error-first_name"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mid_name">Middle Name</label>
                            <input type="text" name="mid_name" class="form-control" id="mid_name" required>
                            <small class="text-danger form-error-mid_name"></small>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" required>
                            <small class="text-danger form-error-last_name"></small>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <small class="text-danger form-error-email"></small>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Your Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="phone" required>
                            <small class="text-danger form-error-phone"></small>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="gender">Your Gender</label>
                            <select type="select" class="form-control" name="gender" id="gender" required>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                            </select>
                            <small class="text-danger form-error-gender"></small>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="birth_date">Your Birth Date</label>
                            <input type="date" class="form-control" name="birth_date" id="birth_date" required>
                            <small class="text-danger form-error-birth_date"></small>

                        </div>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.php-email-form').submit(function (event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    dataType: 'json',
                    success: function (response) {
                        sessionStorage.setItem('successMessage', response.data.message);
                        window.location.href = '/cvs';
                    },
                    error: function (xhr, status, error) {
                        errorResponse = xhr.responseJSON;
                        $.each(errorResponse.data.errors, function (field, errors) {
                            $(".form-error-" + field).html(errors[0])
                        });
                    }
                });
            });
        });
    </script>
@endsection
