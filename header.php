<header>
    <!-- Intro settings -->
    <style>
        /* Default height for small devices */
        #intro-example {
            height: 400px;
            background-position: center;
            background-image: url("https://c4.wallpaperflare.com/wallpaper/467/740/1008/laptop-desk-wallpaper-preview.jpg");
        }

        /* Height for devices larger than 992px */
        @media (min-width: 992px) {
            #intro-example {
                height: 1000px;
                background-image: url('https://cdn.shopify.com/s/files/1/2553/8626/articles/laptop-on-wooden-desk-plant_c14249a9-3218-4296-8b6e-2a25834b19a2_1920x.jpg?v=1663616370');
            }
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Carousel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#techstack">TechStack</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro-example" class="text-center bg-image"
         style="
        ">
        <div class="mask h-100" style="background-color: rgba(0, 0, 0, 0.7);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
                    <h5 class="mb-4">
                        Best & free guide of responsive web design
                    </h5>
                    <a class="btn btn-outline-light btn-lg m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                       role="button" rel="nofollow" target="_blank">Start tutorial</a>
                    <a class="btn btn-outline-light btn-lg m-2" href="https://mdbootstrap.com/docs/standard/"
                       target="_blank" role="button">Download MDB UI KIT</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
</header>