<!-- FOOTER -->
<footer class="container bg-dark text-light">
    <footer class="py-5">
        <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="<?php echo home_url(); ?>"
                                                 class="nav-link p-0 text-light">Home</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo home_url(); ?>/#about"
                                                 class="nav-link p-0 text-light">About</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo home_url(); ?>/#services"
                                                 class="nav-link p-0 text-light">Services</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo home_url(); ?>/#contact"
                                                 class="nav-link p-0 text-light">Contact</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="<?php echo home_url(); ?>/#tech-stack"
                                                 class="nav-link p-0 text-light">TechStack</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo home_url(); ?>/#api-experience"
                                                 class="nav-link p-0 text-light">API Experience</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo home_url(); ?>/#projects"
                                                 class="nav-link p-0 text-light">Projects</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo home_url(); ?>/blog"
                                                 class="nav-link p-0 text-light">Blog</a></li>
                </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>2021-<?php echo date('Y'); ?> <a class="text-light" href="https://l37sg0.com">l37sg0.com</a></p>
            <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-facebook-f"></i
                        ></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-youtube"></i
                        ></a>

                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-linkedin-in"></i
                        ></a>

                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-github"></i
                        ></a>
                </section>
            </div>
        </div>
    </footer>
</footer>
<?php wp_footer(); ?>