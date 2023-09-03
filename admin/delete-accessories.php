<?php
include('config.php');
$u_id = $_GET['id'];

if (isset($_GET['confirm'])) {
    $query = mysqli_query($con, "DELETE FROM accessories WHERE id = '$u_id'");
    if ($query == 1) {
        echo '<script>alert("Cat Delete Successfully");window.location.href="manage-accessories.php"</script>';
    } else {
        echo '<script>alert("Cat Delete Failed");window.location.href="manage-accessories.php"</script>';
    }
} else {
    echo '<script>
        if (confirm("Are you sure you want to delete this category?")) {
            window.location.href = "delete-accessories.php?id=' . $u_id . '&confirm=1";
        } else {
            window.location.href = "manage-accessories.php";
        }
    </script>';
}
?>
