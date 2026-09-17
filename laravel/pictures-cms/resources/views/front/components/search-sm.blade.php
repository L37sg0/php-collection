<form class="search-form">
    <div class="input-group input-group-sm mb-3 pt-3">
        <button class="search-button" type="submit"
                aria-label="Search for all images on Pixabay">
            <i class="fa-solid fa-magnifying-glass"></i></button>
        <input type="text" class="form-control" aria-label="Search for images">
        <button class="btn btn-light dropdown-toggle text-dark" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">{{ 'All Images' }}
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-images"></i> {{ 'All Images' }}</a></li>
            <li class="dropdown-submenu"><a class="dropdown-item" href="#"><i class="fa-solid fa-camera-retro"></i> {{ 'Photos' }}</a></li>
            <li class="dropdown-submenu"><a class="dropdown-item" href="#"><i class="fa-solid fa-paintbrush"></i> {{ 'Illustrations' }}</a></li>
            <li class="dropdown-submenu"><a class="dropdown-item" href="#"><i class="fa-solid fa-bezier-curve"></i> {{ 'Vectors' }}</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-video"></i> {{ 'Videos' }}</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-music"></i> {{ 'Music' }}</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-wave-square"></i> {{ 'Sound Effects' }}</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-fire-flame-curved"></i> {{ 'GIFs' }}</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-users"></i> {{ 'Users' }}</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">{{ 'Search Options' }}</a></li>
        </ul>

    </div>
</form>
