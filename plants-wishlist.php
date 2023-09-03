<?php
session_start();
include('config.php');

if (isset($_SESSION['id']) && isset($_GET['id'])) {
    $userId = $_SESSION['id'];
    $productId = $_GET['id'];

    // Fetch product details based on the product ID
    $productQuery = "SELECT id, pname AS w_name, price AS w_price, stocks AS w_stock, img AS w_img FROM plants WHERE id = '$productId'";
    $productResult = mysqli_query($con, $productQuery);
    $productData = mysqli_fetch_assoc($productResult);

    // Extract product details into variables

    $w_name = $productData['w_name'];
    $w_price = $productData['w_price'];
    $w_stock = $productData['w_stock'];
    $w_img = $productData['w_img'];

    // Insert the product into the wishlist table
    $insertQuery = "INSERT INTO `wishlist`(`w_name`, `pfk`, `w_img`, `w_price`, `w_stock`, `u_id`, `date`) VALUES 
    ('$w_name','$productId','$w_img','$w_price','$w_stock','$userId', NOW())";
    mysqli_query($con, $insertQuery);

    // Redirect back to the product detail page
    header("Location: wishlist.php?id=$productId");
    exit;
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: index.php");
    exit;
}
?>
