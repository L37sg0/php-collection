<style>
    .dropdown-menu {
        width: 1000%; /* Adjust the width of the dropdown menu */
        max-width: 800px; /* Optional: Limit the maximum width */
        padding: 1rem; /* Add padding for spacing */
        font-size: 14px;
        font-weight: 400;
    }

    .dropdown-menu .row {
        margin: 0;
    }

    .dropdown-menu .col-menu {
        padding: 10px;
        border-right: 1px solid black; /* Add right border */
    }

    .dropdown-menu .col-menu:last-child {
        border-right: none; /* Remove border for the last column */
    }
    .dropdown-menu .row-social {
        border-top: 1px solid black; /* Add right border */

    }
    .dropdown-item {
        white-space: nowrap;
    }
</style>
<div class="dropdown">
    <button class="btn btn-outline-light dropdown-toggle text-dark" type="button" style="border: none;"
            data-bs-toggle="dropdown" aria-expanded="false">{{ 'Explore' }}
    </button>
    <div class="dropdown-menu bg-dark text-light">
        <div class="row">
            <div class="col col-menu mb-3">
                <h5>{{ 'Media' }}</h5>
                <a href="#" class="dropdown-item text-light"><i class="fa-solid fa-camera-retro"></i> {{ 'Photos' }}</a>
                <a href="#" class="dropdown-item text-light"><i class="fa-solid fa-paintbrush"></i> {{ 'Illustrations' }}</a>
                <a href="#" class="dropdown-item text-light"><i class="fa-solid fa-bezier-curve"></i> {{ 'Vectors' }}</a>
                <a href="#" class="dropdown-item text-light"><i class="fa-solid fa-video"></i> {{ 'Videos' }}</a>
                <a href="#" class="dropdown-item text-light"><i class="fa-solid fa-music"></i> {{ 'Music' }}</a>
                <a href="#" class="dropdown-item text-light"><i class="fa-solid fa-wave-square"></i> {{ 'Sound Effects' }}</a>
                <a href="#" class="dropdown-item text-light"><i class="fa-solid fa-fire-flame-curved"></i> {{ 'GIFs' }}</a>
            </div>

            <div class="col col-menu mb-3">
                <h5>{{ 'Discover' }}</h5>
                    <a href="#" class="dropdown-item text-light">{{ 'Editor\'s Choice' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Curated Collections' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Pixabay Radio' }}<span class="badge bg-pixabay">NEW</span></a>
                    <a href="#" class="dropdown-item text-light">{{ 'Popular Images' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Popular Videos' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Popular Music' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Popular Searches' }}</a>
            </div>

            <div class="col col-menu mb-3">
                <h5>{{ 'Comunity' }}</h5>
                    <a href="#" class="dropdown-item text-light">{{ 'Blog' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Forum' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Creators' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Cameras' }}</a>
            </div>

            <div class="col col-menu mb-3">
                <h5>{{ 'About' }}</h5>
                    <a href="#" class="dropdown-item text-light">{{ 'About Us' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'FAQ' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'License Summary' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Terms of Service' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Privacy Policy' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Cookies Policy' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Digital Services Act' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'Report Content' }}</a>
                    <a href="#" class="dropdown-item text-light">{{ 'API' }}</a>
            </div>
        </div>
        <div class="row row-social">
            <div class="col">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <div class="col">
                <i class="fa-brands fa-pinterest"></i>
            </div>
            <div class="col">
                <i class="fa-brands fa-twitter"></i>
            </div>
            <div class="col">
                <i class="fa-brands fa-facebook"></i>
            </div>
        </div>
    </div>
</div>
