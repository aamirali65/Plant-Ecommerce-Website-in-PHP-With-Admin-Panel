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
                                    <h4 class="card-title">Users</h4>
                                    <h6 class="card-subtitle">Manage Users</h6>
                                </div>
                                <div class="lines" style="display: flex;justify-content: flex-end;">
                                    <a class="btn btn-primary" href="user-add.php" style="text-decoration: none;">Add Users</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include('config.php');
                                        $query = mysqli_query($con,'SELECT * FROM `user` ORDER BY `user`.`id` DESC');
                                        if($query){
                                            while($row = mysqli_fetch_assoc($query)){
                                        ?>
                                            <tr>
                                                <td><?php echo $row['id']?></td>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['phone']?></td>
                                                <td><?php $row['role'];
                                                if($row['role'] == 0){
                                                    echo "Admin";
                                                    }else{
                                                    echo "User";
                                                }
                                                ?></td>
                                                <td>
                                                    <a href="edit-user.php?id=<?php echo $row['id']?>" class="label label-warning">Edit</a>
                                                    <a href="delete-user.php?id=<?php echo $row['id']?>" class="label label-danger">Delete</a>
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