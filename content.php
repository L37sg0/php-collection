<style>
    .l37sg0-badge {
        font-size: 1.5rem;
    }


    @media (min-width: 321px) and (max-width: 992px) {
        .l37sg0-badge {
            font-size: 1rem;
        }
    }

    @media (min-width: 100px) and (max-width: 320px) {
        .l37sg0-badge {
            font-size: 0.8rem;
        }
    }
</style>

<?php $avatarImage = get_template_directory_uri() . '/assets/images/about-avatar.png'; ?>
<?php if (!empty($image = get_theme_mod('l37sg0_theme_about_section_avatar'))){
    $avatarImage = $image;
}?>
<div id="about" class="py-4 bg-light text-dark">
    <div class="container py-4 text-center bg-light text-dark">
        <h1>About</h1>
    </div>

    <hr class="featurette-divider">
    <div class="container py-4 bg-light text-dark">

        <div class="row featurette">
            <div class="col-md-5 order-md-1">
                <img id="about-avatar"
                     src="<?php echo esc_url($avatarImage); ?>"
                     alt="about-avatar"/>
                <style>
                    #about-avatar {
                        width: 100%;
                    }

                    /* Width for devices larger than 992px */
                    @media (min-width: 992px) {
                        #about-avatar {
                            width: 500px;
                        }
                    }
                    /* Width for tablets */
                    @media (min-width: 768px) and (max-width: 991px) {
                        #about-avatar {
                            width: 75%;
                        }
                    }
                </style>
            </div>
            <div class="col-md-7 order-md-2">
                <p class="lead"><?php echo get_theme_mod('l37sg0_theme_about_section_text'); ?></p>
            </div>
        </div>
    </div>

</div>

<div id="services" class="py-4 bg-dark text-light">
    <div class="container py-4 text-center text-light bg-dark">
        <h1>Services</h1>
    </div>

    <hr class="featurette-divider">

    <div class="container py-4 text-light bg-dark">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <section class="col">
                <h3 class="text-center">Webdesign</h3>
                <article>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                    cupiditate. At vero eos et accusamus et molestias iusto odio dignissimos.
                </article>
            </section>
            <section class="col">
                <h3 class="text-center">Webdesign</h3>
                <article>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                    cupiditate. At vero eos et accusamus et molestias iusto odio dignissimos.
                </article>
            </section>
            <section class="col">
                <h3 class="text-center">Webdesign</h3>
                <article>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                    cupiditate. At vero eos et accusamus et molestias iusto odio dignissimos.
                </article>
            </section>
            <section class="col">
                <h3 class="text-center">Webdesign</h3>
                <article>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                    cupiditate. At vero eos et accusamus et molestias iusto odio dignissimos.
                </article>
            </section>
            <section class="col">
                <h3 class="text-center">Webdesign</h3>
                <article>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                    cupiditate. At vero eos et accusamus et molestias iusto odio dignissimos.
                </article>
            </section>
            <section class="col">
                <h3 class="text-center">Webdesign</h3>
                <article>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                    cupiditate. At vero eos et accusamus et molestias iusto odio dignissimos.
                </article>
            </section>
        </div>
    </div>
</div>

<div id="tech-stack" class="py-4 text-dark bg-light">
    <div class="container py-4 text-center py-4 text-dark bg-light">
        <h1>TechStack</h1>
    </div>

    <hr class="featurette-divider">
    <div class="container py-4 text-center text-dark bg-light">

        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-3">
            <div class="col">
                <div class="text-center py-2 px-2 border border-5 border-dark" style="color: darkorange;">
                    <h3 class="l37sg0-badge"><span class="text-dark">PRO</span>X<span class="text-dark">MO</span>X</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 border border-5 border-dark" style="color: blue">
                    <h3 class="l37sg0-badge"><span class="text-light rounded-3" style="background-color: blue">pf</span>sense</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 border border-5 border-dark" style="color: orangered">
                    <h3 class="l37sg0-badge">Ubuntu</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 border border-5 border-dark" style="color: mediumvioletred">
                    <h3 class="l37sg0-badge">Debian</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 border border-5 border-dark" style="color: dodgerblue">
                    <h3 class="l37sg0-badge">Docker</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 border border-5 border-dark" style="color: limegreen">
                    <h3 class="l37sg0-badge">NGINX</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 border border-5 border-dark" style="color: darkslateblue">
                    <h3 class="l37sg0-badge">PHP</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 border border-5 border-dark" style="color: cornflowerblue">
                    <h3 class="l37sg0-badge">My<span style="color: coral">SQL</span></h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 border border-5 border-dark" style="color: darkviolet">
                    <h3 class="l37sg0-badge">Bootstrap</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 border border-5 border-dark" style="color: red">
                    <h3 class="l37sg0-badge">Laravel</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 border border-5 border-dark text-dark">
                    <h3 class="l37sg0-badge">WordPress</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 border border-5 border-dark" style="color: darkorange">
                    <h3 class="l37sg0-badge">Magento</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $apiImage = get_template_directory_uri() . '/assets/images/api-section-image.png';?>
<?php if (!empty($image = get_theme_mod('l37sg0_theme_api_section_image'))){
    $apiImage = $image;
}?>
<div id="api-experience" class="py-4 text-dark bg-image">
    <style>
        #api-experience {
            background-image: url("<?php echo esc_url($apiImage); ?>");
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
        }
    </style>
    <div class="container py-4 text-center py-4">
        <h1>API Experience</h1>
    </div>

    <hr class="featurette-divider">
    <div class="container py-4 text-center text-dark">

        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-3">
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark" style="color: black;">
                    <h3 class="l37sg0-badge">amazon</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark" style="color: red;">
                    <h3 class="l37sg0-badge" style="-webkit-text-stroke: 1px grey">e<span style="color: blue">b</span><span style="color: yellow">a</span><span style="color: lime">y</span></h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark" style="color: orangered;">
                    <h3 class="l37sg0-badge">Cdiscount</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark" style="color: lightgreen;">
                    <h3 class="l37sg0-badge"><span class="text-dark">mor</span><span style="color: deepskyblue">e</span>commerce</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark" style="color: dodgerblue;">
                    <h3 class="l37sg0-badge">OnBuy</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark text-light">
                    <h3 class="l37sg0-badge" style="-webkit-text-stroke: 2px dodgerblue;">fruugo</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark" style="color: darkviolet;">
                    <h3 class="l37sg0-badge">wayfair</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="projects" class="py-4 text-light bg-dark">
    <div class="container py-4 text-center text-light bg-dark">
        <h1>Projects</h1>
    </div>

    <hr class="featurette-divider">
    <div class="container py-4 text-center text-light bg-dark">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card text-dark">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                         width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                         aria-label="Placeholder: 500x250" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee"/>
                        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x250</text>
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">Project title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-primary">Preview</a>
                        <a href="#" class="btn btn-primary">Github</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-dark">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                         width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                         aria-label="Placeholder: 500x250" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee"/>
                        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x250</text>
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">Project title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-primary">Preview</a>
                        <a href="#" class="btn btn-primary">Github</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-dark">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                         width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                         aria-label="Placeholder: 500x250" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee"/>
                        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x250</text>
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">Project title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-primary">Preview</a>
                        <a href="#" class="btn btn-primary">Github</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-dark">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                         width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                         aria-label="Placeholder: 500x250" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee"/>
                        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x250</text>
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">Project title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-primary">Preview</a>
                        <a href="#" class="btn btn-primary">Github</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-dark">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                         width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                         aria-label="Placeholder: 500x250" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee"/>
                        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x250</text>
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">Project title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-primary">Preview</a>
                        <a href="#" class="btn btn-primary">Github</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-dark">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                         width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                         aria-label="Placeholder: 500x250" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee"/>
                        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x250</text>
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">Project title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-primary">Preview</a>
                        <a href="#" class="btn btn-primary">Github</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="py-4 text-dark bg-light">
    <div class="container py-4 text-center text-dark bg-light">
        <h1>Contact</h1>
    </div>

    <hr class="featurette-divider">
    <!-- Wrapper container -->
    <div class="container py-4 px-4 text-light bg-dark rounded-3">

        <!-- Bootstrap 5 starter form -->
        <form id="contactForm" class="text-light bg-dark">

            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name"/>
            </div>

            <!-- Email address input -->
            <div class="mb-3">
                <label class="form-label" for="emailAddress">Email Address</label>
                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address"/>
            </div>

            <!-- Message input -->
            <div class="mb-3">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" id="message" type="text" placeholder="Message"
                          style="height: 10rem;"></textarea>
            </div>

            <!-- Form submit button -->
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </div>

        </form>

    </div>
</div>