<?php
include('main.php');
include('sidebar.php');
include('config.php');

?>
<?php
$u_id = $_GET['id'];
$query = mysqli_query($con,"Select * from categories WHERE cat_id = '$u_id'");
if ($query){
    while($row = mysqli_fetch_assoc($query)){
?>
       <div class="page-wrapper">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                        <div class="card card-body mt-5">
                            <h3 class="box-title m-b-0">Categories</h3>
                            <p class="text-muted m-b-30 font-13"> Edit Categories </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <input type="text" class="form-control" value="<?php echo $row['name']?>" name="cat" id="exampleInputEmail1" >
                                        </div>
                                        <div class="btnz float-right">
                                            <a href="manage-category.php" class="btn btn-danger waves-effect waves-light m-r-10">Back</a>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10" name="btn">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
       </div>
       <?php
       }}?>
        <?php
        if(isset($_POST['btn'])){
            $cat = $_POST['cat'];
            $query1 = mysqli_query($con,"UPDATE `categories` SET `name`='$cat',`date`=current_timestamp() WHERE cat_id = '$u_id'");
            if($query1 == 1){
                echo '<script>alert("Cat Updated");window.location.href="manage-category.php"</script>';
            }
            else{
                echo '<script>alert("Failed to Update Cat");window.location.href="edit-category.php"</script>';
             }
        }
        ?>