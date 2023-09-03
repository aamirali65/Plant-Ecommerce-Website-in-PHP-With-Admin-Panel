<?php
include('main.php');
?>
<div class="container">
<form action="#" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">pass</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">img</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="img"> 
  </div>
  
  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
</form>
<?php
  if(isset($_POST['btn'])){
    include('config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $file = $_FILES['img'];
    $imgname = $file['name'];
    $imgpath = $file['tmp_name'];
    $location = 'img/'.$imgname;
    move_uploaded_file($imgpath,$location);
    $sql = mysqli_query($con,"INSERT INTO `admin`(`id`, `name`, `email`, `pass`, `img`) VALUES ('','$name','$email','$pass','$imgname')");
           if($sql){
            echo '<script>alert("Your Data inserted Successfully");</script>';
        }
        else{
            echo '<script>alert("Failed to insert data");</script>';
         }
  }
?>
</div>