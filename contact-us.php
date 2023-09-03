
<?php include('main.php')?>
<body>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div class="main-wrapper">

        <!-- Begin Main Header Area -->
        <?php include('header.php')?>
        <!-- Main Header Area End Here -->

        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Contact</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-wrap">
                                <div class="contact-info text-white" data-bg-image="assets/images/contact/1-1-370x500.jpg">
                                    <h2 class="contact-title">Contact Info:</h2>
                                    <p class="contact-desc">Fill the form amd our teaam will get to back
                                        to you within 24 hours.
                                    </p>
                                    <ul class="contact-list">
                                        <li>
                                            <i class="pe-7s-call"></i>
                                            <a href="tel://123-456-789">123 456 789</a>
                                        </li>
                                        <li>
                                            <i class="pe-7s-mail"></i>
                                            <a href="mailto://info@example.com">info@example.com</a>
                                        </li>
                                        <li>
                                            <i class="pe-7s-map-marker"></i>
                                            <span>13, Your Address, Here</span>
                                        </li>
                                    </ul>
                                </div>
                                <form id="contact-form" class="contact-form" action="https://whizthemes.com/mail-php/mamunur/pronia/pronia.php">
                                    <div class="group-input">
                                        <div class="form-field me-lg-30 mb-35 mb-lg-0">
                                            <input type="text" name="con_firstName" placeholder="First Name*" class="input-field">
                                        </div>
                                        <div class="form-field mb-35">
                                            <input type="text" name="con_lastName" placeholder="Last Name*" class="input-field">
                                        </div>
                                    </div>
                                    <div class="group-input mb-35">
                                        <div class="form-field me-lg-30 mb-35 mb-lg-0">
                                            <input type="text" name="con_phone" placeholder="Phone*" class="input-field">
                                        </div>
                                        <div class="form-field">
                                            <input type="text" name="con_email" placeholder="Email*" class="input-field">
                                        </div>
                                    </div>
                                    <div class="form-field mb-5">
                                        <textarea name="con_message" placeholder="Message" class="textarea-field"></textarea>
                                    </div>
                                    <div class="contact-button-wrap">
                                        <button type="submit" class="btn btn btn-custom-size xl-size btn-pronia-primary">Post Comment
                                        </button>
                                    </div>
                                    <p class="form-message mt-3 mb-0"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-with-map">
                <div class="contact-map">
                    <iframe class="contact-map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1613802584124!5m2!1sen!2sbd" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->

        <!-- Begin Footer Area -->
        <?php include('footer.php')?>
        <!-- Footer Area End Here -->

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="#">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- Scroll To Top End Here -->

    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->

    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/jquery.waypoints.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <script src="assets/js/plugins/parallax.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/tippy.min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/mailchimp-ajax.js"></script>
    <script src="assets/js/plugins/jquery.counterup.js"></script>

    <!--Main JS (Common Activation Codes)-->
    <script src="assets/js/main.js"></script>

</body>

