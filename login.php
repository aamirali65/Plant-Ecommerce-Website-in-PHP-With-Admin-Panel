<?php include('main.php')?>
<style>
    .erros{
        margin-bottom: 1rem !important;
    }
</style>
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
                                <h2 class="breadcrumb-heading">Login Page</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>Login</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login-register-area section-space-y-axis-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <form action="#" method="post">
                                <div class="login-form">
                                    <h4 class="login-title">Login</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Password</label>
                                            <input type="password" placeholder="Password" name="pass" id="password">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box">
                                            <input type="checkbox" id="checkbox">
                                                <label for="remember_me">Show Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-1 mt-md-0">
                                            <div class="forgotton-password_info">
                                                <a href="#"> Forget password?</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-5">
                                            <button type="submit" name="submit" class="btn btn-custom-size lg-size btn-pronia-primary">Login</button>
                                        </div>
                                    </form>
                                    <?php
                       if(isset($_POST['submit'])){
                        include "config.php";
                        $email = $_POST['email'];
                        $pass = md5($_POST['pass']);
                        $sql = "SELECT * FROM user WHERE email = '{$email}' AND pass = '{$pass}'";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            while($row = mysqli_fetch_array($query)){
                                if($row['email']==$email && $row['pass']==$pass){
                                    $_SESSION['name'] = $row['name'];
                                    $_SESSION['id'] = $row['id'];
                                    echo '<script>window.location.href="index.php"</script>';
                                } else {
                                    $_SESSION['error'] = "";
                                }
                            }
                        }
                    }
                    
                        
                        
                        ?>
                                    </div>
                                    <div class="spk mt-2 text-end">
                                    <p class="signup-link">
                                Don't have an account?
                                <a href="register.php" class="signup-link link" style="color: #abd373;"> Register now</a>
                                    </div>
                                </div>
                        </div>
                        
                    </div>
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
<script>
    function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var checkbox = document.getElementById("show_pass");

            if (checkbox.checked) {
                passwordField.type = "text";
                console.log("hello")
            } else {
                passwordField.type = "password";
            }
        };
</script>
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