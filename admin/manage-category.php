<?php
include('main.php');
include('sidebar.php');

?>
<style>
    td a:hover{
color: white;
text-decoration: none;
    }
</style>
       <div class="page-wrapper">
<div class="container">
<div class="row">
  
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card mt-5">
                            <div class="card-body">
                                <div class="btns d-inline-block">
                                    <h4 class="card-title">Categories</h4>
                                    <h6 class="card-subtitle">Plants Category</h6>
                                </div>
                                <div class="lines" style="display: flex;justify-content: flex-end;">
                                    <a class="btn btn-primary" href="add-category.php" style="text-decoration: none;">Add Category</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include('config.php');
                                        $query = mysqli_query($con,'SELECT * FROM `categories`');
                                        if($query){
                                            while($row = mysqli_fetch_assoc($query)){
                                        ?>
                                            <tr>
                                                <td><?php echo $row['cat_id']?></td>
                                                <td><?php echo $row['name']?></td>
                                                <td>
                                                    <a href="edit-category.php?id=<?php echo $row['cat_id']?>" class="label label-warning">Edit</a>
                                                    <a href="delete-cat.php?id=<?php echo $row['cat_id']?>" class="label label-danger">Delete</a>
                                            </td>
                                            </tr>
                                            <?php
                                            }}
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
</div>