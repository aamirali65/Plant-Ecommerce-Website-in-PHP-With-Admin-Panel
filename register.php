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
                                <h2 class="breadcrumb-heading">Register Page</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>Register</li>
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
                                    <h4 class="login-title">Register</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <label>First Name</label>
                                            <input type="text" placeholder="First Name" name="name">
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label>Phone</label>
                                            <input type="text" placeholder="Phone" name="phone">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Password</label>
                                            <input type="password" placeholder="Password" name="pass">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Confirm Password</label>
                                            <input type="password" placeholder="Confirm Password" name="cpass">
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-custom-size lg-size btn-pronia-primary" type="submit" name="add">Register</button>
                                        </div>
                                    </form>
                                    <?php
                            if(isset($_POST['add'])){
                                include 'config.php';
                                $name = $_POST['name'];
                                $phone = $_POST['phone'];
                                $email = $_POST['email'];
                                $pass = md5($_POST['pass']);
                                $cpass = md5($_POST['cpass']);
                                $role = '1';
                                if($pass == $cpass){
                                    $sql = mysqli_query($con,"INSERT INTO `user`(`id`, `name`, `email`, `pass`, `date`, `phone`, `role`) VALUES
                                    ('','$name','$email','$pass',current_timestamp(),'$phone','$role')");
                                    if($sql){
                                        echo '<script>alert("User Register Successfull. Now You can login your Account");window.location.href="login.php"</script>';
                                    }else{
                                        echo '<script>alert("User Register Failed");</script>';
                                    }
                                }else{
                                    echo '<script>alert("Password and Confirm Password Does Not Match !");</script>';
                                }
                            }
                            
                            ?>
                                    <div class="spk mt-2 text-end">
                                    <p class="signin">Already have an acount ? <a href="login.php" style="color: #abd373;">Signin</a> </p>
                                    </div>
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