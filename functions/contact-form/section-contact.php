<!-- Contact Form Section -->
<div id="contact" class="py-4 text-dark bg-light">
    <div class="container py-4 text-center text-dark bg-light">
        <h1>Contact</h1>
    </div>

    <hr class="featurette-divider">
    <!-- Wrapper container -->
    <div class="container py-4 px-4 text-light bg-dark rounded-3">

        <!-- Bootstrap 5 starter form -->
        <form
            id="l37sg0ContactForm"
            class="text-light bg-dark l37sg0-contact-form"
            method="post"
            action="#"
            data-url="<?php echo admin_url('admin-ajax.php');?>"
        >

            <!-- Name input -->
            <div class="mb-3 form-group">
                <label class="form-label" for="name">Name</label>
                <input class="form-control l37sg0-form-control" id="name" type="text" placeholder="Your Name" name="name"/>
                <small class="text-danger form-control-msg">Your Name is Required</small>
            </div>

            <!-- Email address input -->
            <div class="mb-3 form-group">
                <label class="form-label" for="email">Email Address</label>
                <input class="form-control l37sg0-form-control" id="email" type="email" placeholder="Your Email Address" name="email"/>
                <small class="text-danger form-control-msg">Your Email Address is Required</small>
            </div>

            <!-- Message input -->
            <div class="mb-3 form-group">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control l37sg0-form-control" id="message" placeholder="Your Message"
                          style="height: 10rem;" name="message"></textarea>
                <small class="text-danger form-control-msg">Your Message is Required</small>
            </div>

            <!-- Form submit button -->
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit" name="submit">Submit</button>
                <small class="text-info form-control-msg js-form-submission">Submission in process, please
                    wait..</small>
                <small class="text-success form-control-msg js-form-success">Message Successfully submitted, thank
                    you!</small>
                <small class="text-danger form-control-msg js-form-error">There was a problem with the Contact Form,
                    please try again!</small>
            </div>
            <?php wp_nonce_field('l37sg0_contact_form_nonce', 'nonce'); ?>


        </form>

    </div>
</div>
<?php //require_once 'theme-contact-form-javascript.php'?>