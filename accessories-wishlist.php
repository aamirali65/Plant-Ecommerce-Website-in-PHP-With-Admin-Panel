<?php
session_start();
include('config.php');

if (isset($_SESSION['id']) && isset($_GET['id'])) {
    $userId = $_SESSION['id'];
    $productId = $_GET['id'];

    // Fetch accessory details based on the accessory ID
    $accessoryQuery = "SELECT id, name AS w_name, price AS w_price, stock AS w_stock, img AS w_img FROM accessories WHERE id = '$productId'";
    $accessoryResult = mysqli_query($con, $accessoryQuery);
    $accessoryData = mysqli_fetch_assoc($accessoryResult);

    // Extract accessory details into variables
    $w_name = $accessoryData['w_name'];
    $w_price = $accessoryData['w_price'];
    $w_stock = $accessoryData['w_stock'];
    $w_img = $accessoryData['w_img'];

    // Insert the accessory into the wishlist table
    $insertQuery = "INSERT INTO `wishlist`(`w_name`, `afk`, `w_img`, `w_price`, `w_stock`, `u_id`, `date`) VALUES 
    ('$w_name','$productId','$w_img','$w_price','$w_stock','$userId', NOW())";
    mysqli_query($con, $insertQuery);

    // Redirect back to the accessory detail page
    header("Location: wishlist.php?id=$productId");
    exit;
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: index.php");
    exit;
}
?>
