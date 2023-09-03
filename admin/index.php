<?php
include('main.php');
session_start();
if(isset($_SESSION['name'])){
    header('Location: home.php');
}
?>
<section id="wrapper">
        <div class="login-register" style="background-image:url(https://images.unsplash.com/photo-1538438253612-287c9fc9217e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80);">
            <div class="login-box card mt-5">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="" method="post">
                        <h3 class="box-title m-b-20">Sign In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" placeholder="Email" name="email" required> </div>
                        </div>
                        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="password" placeholder="Password" name="pass" id="password" required>
            </div>
        </div>
                        <div class="form-group row">
            <div class="col-md-12 font-14">
                <div class="checkbox checkbox-primary pull-left p-t-0">
                    <input id="checkbox-signup" type="checkbox" onchange="togglePasswordVisibility()">
                    <label for="checkbox-signup"> Show Password </label>
                </div>
            </div>
        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="btn">Log In</button>
                            </div>
                        </div>
                    </form>
                    <?php
     
     if (isset($_POST['btn'])) {
         include('config.php');
         $email = $_POST['email'];
         $pass = md5($_POST['pass']);
         $query = mysqli_query($con, "SELECT * FROM admin WHERE email = '{$email}' AND pass = '{$pass}'");
         
         if (mysqli_num_rows($query) == 1) {
            while ($row = mysqli_fetch_assoc($query)) {
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
        
                echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Login Successful",
                    text: "Welcome, ' . $row['name'] . '!",
                    allowOutsideClick: true,
                    showConfirmButton: true
                }).then(() => {
                    setTimeout(function() {
                        window.location.href = "home.php";
                    }, 100); // Delay the redirection by a short amount of time (milliseconds)
                });
              </script>';
            }
                
         } else {
             // Use SweetAlert for failure
             echo '<script>
                     Swal.fire({
                         icon: "error",
                         title: "Login Failed",
                         text: "Kindly Check Your Email And Password",
                         allowOutsideClick: false,
                         showConfirmButton: true,
                         confirmButtonText: "OK",
                         timer: 3000,
                         onClose: () => {
                             window.location.href = "index.php";
                         }
                     });
                   </script>';
         }
     }
          
      ?>
                   
                </div>
            </div>
        </div>
    </section>
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var checkbox = document.getElementById("checkbox-signup");

            if (checkbox.checked) {
                passwordField.type = "text";
                console.log("hello")
            } else {
                passwordField.type = "password";
            }
        };
       
    </script>