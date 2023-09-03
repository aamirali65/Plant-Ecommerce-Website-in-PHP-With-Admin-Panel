

<?php include('main.php')?>

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
                                <h2 class="breadcrumb-heading">Wishlist Page</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>Wishlist</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wishlist-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="javascript:void(0)">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product_remove">remove</th>
                                                <th class="product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="product-price">Unit Price</th>
                                                <th class="product-stock-status">Stock Status</th>
                                                <th class="cart_btn">add to cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$o_id = $_GET['id'];
$uid = $_SESSION['id'];
include('config.php');

$querys = mysqli_query($con, "
    SELECT w.w_id AS wishlist_id, w.u_id, w.date,
       COALESCE(p.pname, a.name) AS item_name,
       COALESCE(p.price, a.price) AS item_price,
       COALESCE(p.stocks, a.stock) AS item_stock,
       COALESCE(p.img, a.img) AS item_img,
       COALESCE(p.id, a.id) AS item_id,
       COALESCE(p.id, a.id) AS id,   -- Assuming you have an 'id' column in both plants and accessories tables
       COALESCE('plant', 'accessory') AS item_type,
       u.name AS user_name
    FROM wishlist w
    LEFT JOIN plants p ON w.pfk = p.id
    LEFT JOIN accessories a ON w.afk = a.id
    JOIN user u ON w.u_id = u.id
    WHERE w.u_id = '$uid'
");

if ($querys) {
    while ($row = mysqli_fetch_assoc($querys)) {
        $itemType = $row['item_type'];

        // Determine the correct image folder based on the item type
        if ($itemType === 'plant') {
            $imageFolder = './admin/img/plants/';
        } else {
            $imageFolder = './admin/img/accessories/';
        }
        
        $imagePath = $imageFolder . $row['item_img'];
?>
        <tr>
            <td class="product_remove">
                <a href="#">
                    <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                    data-tippy-animation="shift-away" data-tippy-delay="50"
                    data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                </a>
            </td>
            <td class="product-thumbnail">
                <a href="#">
                    <img src="<?php echo $imagePath; ?>" alt="Wishlist Thumbnail" style="width: 20%;">
                </a>
            </td>
            <td class="product-name">
                <a href="#">
                    <?php echo $row['item_name']; ?>
                </a>
            </td>
            <td class="product-price">
                <span class="amount">$<?php echo $row['item_price']; ?></span>
            </td>
            <td class="product-stock-status">
                <span class="in-stock">in stock</span>
            </td>
            <td class="cart_btn"><a href="#">add to cart</a></td>
        </tr>
<?php
    }
}
?>


                                        </tbody>
                                    </table>
                                </div>
                            </form>
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



