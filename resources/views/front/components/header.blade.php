<header id="main-header" class="p-3 fixed-top header-transparent">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <img src="/images/pixabay.png" class="logo-img">
            </a>

            <!-- Include your search component here -->
            @include('front.components.search-sm')
            @include('front.components.4-columns-dropdown')


            <div class="text-end">
                <button type="button" class="btn btn-outline-light text-dark me-2" style="border: none;"
                        data-bs-toggle="modal" data-bs-target="#loginModal">{{ 'Log in' }}</button>
                <button type="button" class="btn btn-outline-dark me-2"
                        data-bs-toggle="modal" data-bs-target="#registerModal">{{ 'Join' }}</button>
                <button type="button" class="btn btn-success"
                        data-bs-toggle="modal" data-bs-target="#registerModal">
                    <i class="fa-solid fa-arrow-up-from-bracket"></i> {{ 'Upload' }}</button>
            </div>
        </div>
    </div>
</header>
@include('front.components.login-modal')
@include('front.components.register-modal')
@section('page_js')
    @parent
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 50) {
                    $('#main-header').removeClass('header-transparent').addClass('header-solid');
                } else {
                    $('#main-header').removeClass('header-solid').addClass('header-transparent');
                }
            });
        });
    </script>
@endsection
