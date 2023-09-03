
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
      
        <div class="error-404-area section-space-y-axis-100" data-bg-image="assets/images/error-404/bg/1-1920x886.png">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12 align-self-center">
                        <div class="error-404-content">
                            <div class="error-404-img">
                                <img src="assets/images/error-404/404.png" alt="Error Image">
                            </div>
                            <h2 class="title"><span>Oops,</span> page not found!</h2>
                            <div class="button-wrap">
                                <a class="btn btn-error" href="index.php">Back to home
                                    <i class="pe-7s-home"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Area End Here -->

        <!-- Begin Newsletter Area -->
        <div class="newsletter-area section-border-y-axis" data-bg-image="assets/images/newsletter/1-1920x400.jpg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 align-self-center">
                        <div class="newsletter-content">
                            <h2 class="newsletter-title">Subscribe Our Newsletter & Get Update Everytime</h2>
                            <form class="newsletter-form" id="mc-form" action="#">
                                <input class="input-field" id="mc-email" type="email" autocomplete="off" name="Enter Your Email" value="Enter Your Email" onblur="if(this.value==''){this.value='Enter Your Email'}" onfocus="if(this.value=='Enter Your Email'){this.value=''}">
                                <div class="btn-wrap">
                                    <button class="btn btn-submit" id="mc-submit">
                                        <i class="pe-7s-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- Mailchimp Alerts -->
                            <div class="mailchimp-alerts text-centre mt-3">
                                <div class="mailchimp-submitting"></div>
                                <div class="mailchimp-success"></div>
                                <div class="mailchimp-error"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Area End Here -->

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

