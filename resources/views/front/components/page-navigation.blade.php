
<div class="nav-scroller bg-light text-center shadow-sm pt-5 pb-5">
    <nav class="nav d-flex justify-content-center" aria-label="Secondary navigation">
        <a class="nav-link text-dark" href="#"><i class="fa-solid fa-house"></i> {{ 'Home' }}</a>
        <a class="nav-link text-dark" href="#"><i class="fa-solid fa-camera-retro"></i> {{ 'Photos' }}</a>
        <a class="nav-link text-dark" href="#"><i class="fa-solid fa-paintbrush"></i> {{ 'Illustrations' }}</a>
        <a class="nav-link text-dark" href="#"><i class="fa-solid fa-bezier-curve"></i> {{ 'Vectors' }}</a>
        <a class="nav-link text-dark" href="#"><i class="fa-solid fa-video"></i> {{ 'Videos' }}</a>
        <a class="nav-link text-dark" href="#"><i class="fa-solid fa-music"></i> {{ 'Music' }}</a>
        <a class="nav-link text-dark" href="#"><i class="fa-solid fa-wave-square"></i> {{ 'Sound Effects' }}</a>
        <a class="nav-link text-dark" href="#"><i class="fa-solid fa-fire-flame-curved"></i> {{ 'GIFs' }}</a>
    </nav>
    <nav class="nav d-flex justify-content-center" aria-label="Tags navigation">
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'background' }}</a>
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'wallpaper' }}</a>
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'flowers' }}</a>
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'woman' }}</a>
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'landscape' }}</a>
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'money' }}</a>
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'people' }}</a>
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'sea' }}</a>
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'cat' }}</a>
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'travel' }}</a>
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'dog' }}</a>
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'house' }}</a>
        <a class="btn btn-sm btn-outline-dark m-2" href="#">{{ 'iphone' }}</a>
        <div class="dropdown">
            <button class="btn btn-sm btn-secondary dropdown-toggle m-2" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                <i class="fa-solid fa-gear"></i>
            </button>
            <ul class="dropdown-menu">
                <li class="dropdown-item">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">{{ 'SafeSearch' }}
                            <span class="tooltip-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                  title="Hides most of the adult content.">
                            <i class="fa-solid fa-question-circle"></i>
                          </span>
                        </label>
                    </div>
                </li>
                <li class="dropdown-item">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">{{ 'Hide AI generated' }}
                            <span class="tooltip-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                  title="Hides AI generated content.">
                            <i class="fa-solid fa-question-circle"></i>
                          </span>
                        </label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-sm btn-outline-dark dropdown-toggle m-2" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                {{ 'Trending' }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item text-dark" href="#">{{ 'Editor\'s Choice' }}</a></li>
                <li><a class="dropdown-item text-dark" href="#">{{ 'Latest' }}</a></li>
                <li><a class="dropdown-item text-dark" href="#">{{ 'Trending' }}</a></li>
            </ul>
        </div>
    </nav>

</div>
