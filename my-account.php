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
                                <h2 class="breadcrumb-heading">My Account</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>My Account</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="account-page-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab" href="#account-dashboard" role="tab" aria-controls="account-dashboard" aria-selected="true">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab" href="#account-orders" role="tab" aria-controls="account-orders" aria-selected="false">Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-details-tab" data-bs-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false">Account Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-logout-tab" href="logout-user.php" role="tab" aria-selected="false">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                                <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel" aria-labelledby="account-dashboard-tab">
                                    <div class="myaccount-dashboard">
                                        <p>Hello <b><?php echo $_SESSION['name']?></b> (not <?php echo $_SESSION['name']?>? 
                                        <a href="logout-user.php">Sign out</a>)</p>
                                        <p>From your account dashboard you can view your recent orders, manage your shipping and
                                            billing addresses and <a href="#">edit your password and account details</a>.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                                    <div class="myaccount-orders">
                                        <h4 class="small-title">MY ORDERS</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th>ORDER</th>
                                                        <th>DATE</th>
                                                        <th>STATUS</th>
                                                        <th>TOTAL</th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="account-order-id" href="#">#5364</a></td>
                                                        <td>Mar 27, 2019</td>
                                                        <td>On Hold</td>
                                                        <td>$162.00 for 2 items</td>
                                                        <td><a href="#" class="btn btn-dark"><span>View</span></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="account-order-id" href="#">#5356</a></td>
                                                        <td>Mar 27, 2019</td>
                                                        <td>On Hold</td>
                                                        <td>$162.00 for 2 items</td>
                                                        <td><a href="#" class="btn btn-dark"><span>View</span></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
                                    <div class="myaccount-details">
                                        <?php
                                        include('config.php');
                                        $uid = $_SESSION['id'];
                                        $querys = mysqli_query($con,"SELECT * FROM user WHERE id ='$uid'");
                                        if($querys){
                                            while($rows = mysqli_fetch_assoc($querys)){

                                          
                                        ?>
                                        <form action="#" class="myaccount-form" method="post">
                                            <div class="myaccount-form-inner">
                                                <div class="single-input single-input-half">
                                                    <label>First Name*</label>
                                                    <input type="text" value="<?php echo $rows['name']?>" name="name">
                                                </div>
                                                <div class="single-input single-input-half">
                                                    <label>Phone*</label>
                                                    <input type="text" value="<?php echo $rows['phone']?>" name="phone">
                                                </div>
                                                <div class="single-input">
                                                    <label>Email*</label>
                                                    <input type="email" value="<?php echo $rows['email']?>" name="email">
                                                </div>
                                                <div class="single-input">
                                                    <label>Current Password(leave blank to leave
                                                        unchanged)</label>
                                                    <input type="password" name="opass">
                                                </div>
                                                <div class="single-input">
                                                    <label>New Password (leave blank to leave
                                                        unchanged)</label>
                                                    <input type="password" name="pass">
                                                </div>
                                                <div class="single-input">
                                                    <label>Confirm New Password</label>
                                                    <input type="password" name="cpass">
                                                </div>
                                                <div class="single-input">
                                                    <button class="btn btn-custom-size lg-size btn-pronia-primary" type="submit" name="btn">
                                                        <span>SAVE CHANGES</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <?php   
                                        $_SESSION['old'] = $rows['pass'];
                                        }
                                        }?>
                                        <?php
                                        if(isset($_POST['btn'])){
                                            $opass = md5($_POST['opass']);
                                            $pass = md5($_POST['pass']);
                                            $cpass = md5($_POST['cpass']);
                                            $apass = $_SESSION['old'];
                                            if($apass === $opass && $opass != $pass){
                                                if($pass !=="" && strlen($pass) >= 8 && $pass == $cpass ){
                                                    $name = $_POST['name'];
                                                    $email = $_POST['email'];
                                                    $phone = $_POST['phone'];
                                                    $role = '1';
                                                    $sqls = mysqli_query($con,"UPDATE `user` SET `name`='$name',`email`='$email',`pass`='$pass',`phone`='$phone',`role`='$role' WHERE id = '$uid'");
                                                    if($sqls){
                                                        echo '<script>alert("Data Updated !")</script>';
                                                    }else{
                                                        echo '<script>alert("Data update failed!")</script>';
                                                    }
                                                }else{
                                                    echo '<script>alert("Password must Be 8 digits long !")</script>';
                                                }
                                            }else{
                                                echo '<script>alert("Current Password is Wrong !")</script>';
                                            }
                                        }
                                        ?>
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