<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $websiteTitle }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="/assets/img/logo.jpeg" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="styassetslesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: iPortfolio
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Updated: Mar 17 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
@include('iPortfolio.components.header')
<main id="main">
    <div class="alert alert-success success-message" role="alert" style="display: none;">
    </div>
    <div class="alert alert-danger error-message" role="alert" style="display: none;">
    </div>
    @yield('content')
</main><!-- End #main -->

@include('iPortfolio.components.footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/typed.js/typed.umd.js"></script>
<script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
{{--<script src="/assets/vendor/php-email-form/validate.js"></script>--}}

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get success message from session storage
        var successMessage = sessionStorage.getItem('successMessage');
        var errorMessage = sessionStorage.getItem('errorMessage');
        if (successMessage) {
            // Display the success message
            $('.success-message').text(successMessage).fadeIn();
            // Clear the success message from session storage
            sessionStorage.removeItem('successMessage');
            // Fade out after 5 seconds
            $('.success-message').delay(5000).fadeOut();
        }
        if (errorMessage) {
            // Display the success message
            $('.error-message').text(errorMessage).fadeIn();
            // Clear the success message from session storage
            sessionStorage.removeItem('successMessage');
            // Fade out after 5 seconds
            $('.error-message').delay(5000).fadeOut();
        }
    });

</script>
</body>

</html>
