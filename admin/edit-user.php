<?php
include('main.php');
include('sidebar.php');
include('config.php');
?>

<?php
$u_id = $_GET['id'];
$query1 = mysqli_query($con,"Select * from user WHERE id = '$u_id'");
if ($query1){
    while($row = mysqli_fetch_assoc($query1)){
?>
       <div class="page-wrapper">
        <div class="container">
        <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info mt-5">
                            <div class="card-body">
                                <form action="#" method="post">
                                    <div class="form-body">
                                        <h3 class="card-title">Add User</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" id="firstName" class="form-control" name="name" value="<?php echo $row['name']?>">
                                                 </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" id="firstName" class="form-control" name="email" value="<?php echo $row['email']?>">
                                                 </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                                    <label class="control-label">Phone</label>
                                                    <input type="number" id="firstName" class="form-control" name="phone" value="<?php echo $row['phone']?>">
                                                 </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Role</label>
                                                    <select class="form-control custom-select" name="role" tabindex="1">
                                                    <?php
                                                    if($row['role'] == 0){
                                                        echo '<option selected value="0">Admin</option>';
                                                        echo '<option value="1">User</option>';
                                                    }else{
                                                        echo '<option value="1" selected>User</option>';
                                                        echo '<option value="0">Admin</option>';
                                                    }
                                                    ?>
                                                    </select>
                                                 </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                    <input type="number" id="firstName" class="form-control" name="pass">
                                                 </div>
                                                
                                            </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                                    <label class="control-label">Confirm Password</label>
                                                    <input type="number" id="firstName" class="form-control" name="cpass">
                                                 </div>
                                                
                                            </div>
                                        </div>
                                         <div class="form-actions float-right">
                                         <a href="manage-user.php" class="btn btn-inverse">Cancel</a>
                                             <button type="submit" class="btn btn-primary" name="btn"> <i class="fa fa-check"></i> Add</button>
                                    </div>
                                </form>
                                <?php
                            }}
                            ?>
                                <?php
                                    if(isset($_POST['btn'])){
                                        $password = $_POST['pass'];
                                        $Cpassword = $_POST['cpass'];
                                        if($password == $Cpassword){
                                     
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $phone = $_POST['phone'];
                                    $pass = md5($_POST['pass']);
                                    $cpass = md5($_POST['cpass']);
                                    $role = $_POST['role'];
                                    $sql1 = "UPDATE `user` SET `name`='$name',`email`='$email',`pass`='$pass',`phone`='$phone',`role`='[value-7]' WHERE id = '$u_id'";
                                    $sql2 = "UPDATE `user` SET `name`='$name',`email`='$email',`phone`='$phone',`role`='$role' WHERE id = '$u_id'";
                                    if($password !=="" && strlen($password) >= 8 && $password == $Cpassword){

                                        $sql = mysqli_query($con,$sql1);
                                       if($sql == 1){
                                           echo '<script>alert("user inserted Successfully");window.location.href="manage-user.php"</script>';
                                       }
                                       else{
                                           echo '<script>alert("Failed to insert data");window.location.href="user-add.php"</script>';
                                       }
                                    }else if ($password === "" && $Cpassword ===""){
                                        $sql = mysqli_query($con,$sql2);
                                       if($sql == 1){
                                           echo '<script>alert("user inserted Successfully");window.location.href="manage-user.php"</script>';
                                       }
                                       else{
                                           echo '<script>alert("Failed to insert data");window.location.href="user-add.php"</script>';
                                       }
                                    }else{
                                        echo '<script>alert("length not match");window.location.href="edit-user.php"</script>';
                                    }
                                   
                                    }
                                    else{
                                        echo '<script>alert("Password And Confirm Password Dont Match");window.location.href="user-add.php"</script>';
                                    }
                                }
    
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
       </div>