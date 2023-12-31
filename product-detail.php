<?php
include
('main.php')
?>

<body>
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
      <?php
      include('header.php')
      ?>
        <!-- Main Header Area End Here -->
        <?php
                include './Admin/config.php';
                $id = $_GET['id'];
                $query = mysqli_query($con, "SELECT plants.*, categories.name AS name FROM plants JOIN categories ON plants.cname = categories.cat_id WHERE id = '$id'");
                if($query){
                while($row = mysqli_fetch_assoc($query)){
                    ?>
        <!-- Begin Main Content Area  -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading"><?php echo $row['pname']?></h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li><?php echo $row['pname']?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-product-area section-space-top-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-product-img">
                                <div class="swiper-container single-product-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="<?php echo "./admin/img/plants/".$row['img']?>" class="single-img gallery-popup">
                                                <img class="img-full" src="<?php echo "./admin/img/plants/".$row['img']?>" alt="Product Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-5 pt-lg-0">
                            <div class="single-product-content">
                                <h2 class="title"><?php echo $row['pname']?></h2>
                                <div class="price-box">
                                    <span class="new-price">$<?php echo $row['price']?></span>
                                </div>
                                <div class="rating-box-wrap">
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="selector-wrap color-option">
                                    <span class="selector-title border-bottom-0">Color</span>
                                    <select class="nice-select wide border-bottom-0 rounded-0">
                                        <option value="default">Black & White</option>
                                        <option value="blue">Blue</option>
                                        <option value="green">Green</option>
                                        <option value="red">Red</option>
                                    </select>
                                </div>
                                <div class="selector-wrap size-option">
                                    <span class="selector-title">Size</span>
                                    <select class="nice-select wide rounded-0">
                                        <option value="medium">Medium Size & Poot</option>
                                        <option value="large">Large Size With Poot</option>
                                        <option value="small">Small Size With Poot</option>
                                    </select>
                                </div>
                                <ul class="quantity-with-btn">
                                    <li class="quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                        </div>
                                    </li>
                                    <li class="add-to-cart">
                                        <a class="btn btn-custom-size lg-size btn-pronia-primary" href="cart.html">Add to
                                            cart</a>
                                    </li>
                                    <li class="wishlist-btn-wrap">
                                        <a class="custom-circle-btn" href="wishlist.php?id=<?php echo $row['id']?>">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                    
                                </ul>
                                <ul class="service-item-wrap">
                                    <li class="service-item">
                                        <div class="service-img">
                                            <img src="assets/images/shipping/icon/car.png" alt="Shipping Icon">
                                        </div>
                                        <div class="service-content">
                                            <span class="title">Free <br> Shipping</span>
                                        </div>
                                    </li>
                                    <li class="service-item">
                                        <div class="service-img">
                                            <img src="assets/images/shipping/icon/card.png" alt="Shipping Icon">
                                        </div>
                                        <div class="service-content">
                                            <span class="title">Safe <br> Payment</span>
                                        </div>
                                    </li>
                                    <li class="service-item">
                                        <div class="service-img">
                                            <img src="assets/images/shipping/icon/service.png" alt="Shipping Icon">
                                        </div>
                                        <div class="service-content">
                                            <span class="title">Safe <br> Payment</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="product-category">
                                    <span class="title">Stock:</span>
                                    <ul>
                                        <li>
                                            <?php if($row['stocks']>0){
                                            $_SESSION['stock'] = "In Stock";     
                                        }else{
                                            $_SESSION['stock'] = "Out Stock";     
                                            }
                                            ?>
                                            <a href="javascript:void(0);"><?php echo $_SESSION['stock']?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-category">
                                    <span class="title">Categories :</span>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo $row['name']?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-category product-tags">
                                    <span class="title">Tags :</span>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">Furniture</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-category social-link align-items-center pb-0">
                                    <span class="title pe-3">Share:</span>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tippy="Tumblr" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-tumblr"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-area section-space-top-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav product-tab-nav tab-style-2 pt-0" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="tab-btn" id="information-tab" data-bs-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="false">
                                        Information
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="active tab-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                                        Description
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="tab-btn" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">
                                        Reviews(3)
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content product-tab-content">
                                <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                                    <div class="product-information-body">
                                        <h4 class="title">Shipping</h4>
                                        <p class="short-desc mb-4">The item will be shipped from China. So it need 15-20 days to
                                            deliver. Our product is good with reasonable price and we believe you will worth it.
                                            So please wait for it patiently! Thanks.Any question please kindly to contact us and
                                            we promise to work hard to help you to solve the problem</p>
                                        <h4 class="title">About return request</h4>
                                        <p class="short-desc mb-4">If you don't need the item with worry, you can contact us
                                            then we will help you to solve the problem, so please close the return request!
                                            Thanks</p>
                                        <h4 class="title">Guarantee</h4>
                                        <p class="short-desc mb-0">If it is the quality question, we will resend or refund to
                                            you; If you receive damaged or wrong items, please contact us and attach some
                                            pictures about product, we will exchange a new correct item to you after the
                                            confirmation.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="product-description-body">
                                        <p class="short-desc mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                            qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                                            natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                            sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                            nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="product-review-body">
                                        <div class="blog-comment mt-0">
                                            <h4 class="heading">Comments (03)</h4>
                                            <div class="blog-comment-item">
                                                <div class="blog-comment-img">
                                                    <img src="assets/images/blog/avatar/1-1-120x120.png" alt="User Image">
                                                </div>
                                                <div class="blog-comment-content">
                                                    <div class="user-meta">
                                                        <h2 class="user-name">Donald Chavez</h2>
                                                        <span class="date">21 July 2021</span>
                                                    </div>
                                                    <p class="user-comment">Lorem ipsum dolor sit amet, consectetur adipisi
                                                        elit, sed
                                                        do eiusmod tempor incidid ut labore etl dolore magna aliqua. Ut enim ad
                                                        minim
                                                        veniam, quis nostrud exercitati ullamco laboris nisi ut aliquiex ea
                                                        commodo
                                                        consequat.
                                                    </p>
                                                    <a class="btn btn-custom-size comment-btn" href="javascript:void(0);">Reply</a>
                                                </div>
                                            </div>
                                            <div class="blog-comment-item relpy-item">
                                                <div class="blog-comment-img">
                                                    <img src="assets/images/blog/avatar/1-2-120x120.png" alt="User Image">
                                                </div>
                                                <div class="blog-comment-content">
                                                    <div class="user-meta">
                                                        <h2 class="user-name">Marissa Swan</h2>
                                                        <span class="date">21 July 2021</span>
                                                    </div>
                                                    <p class="user-comment">Lorem ipsum dolor sit amet, consectetur adipisi
                                                        elit, sed do
                                                        eiusmod tempr incidid ut labore etl dolore magna aliqua. Ut enim ad
                                                        minim veniam,
                                                        quisnos exercitati ullamco laboris nisi ut aliquiex.
                                                    </p>
                                                    <a class="btn btn-custom-size comment-btn style-2" href="javascript:void(0);">Reply</a>
                                                </div>
                                            </div>
                                            <div class="blog-comment-item">
                                                <div class="blog-comment-img">
                                                    <img src="assets/images/blog/avatar/1-3-120x120.png" alt="User Image">
                                                </div>
                                                <div class="blog-comment-content">
                                                    <div class="user-meta">
                                                        <h2 class="user-name">Donald Chavez</h2>
                                                        <span class="date">21 July 2021</span>
                                                    </div>
                                                    <p class="user-comment">Lorem ipsum dolor sit amet, consectetur adipisi
                                                        elit, sed
                                                        do eiusmod tempor incidid ut labore etl dolore magna aliqua. Ut enim ad
                                                        minim
                                                        veniam, quis nostrud exercitati ullamco laboris nisi ut aliquiex ea
                                                        commodo
                                                        consequat.
                                                    </p>
                                                    <a class="btn btn-custom-size comment-btn" href="javascript:void(0);">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feedback-area">
                                            <h2 class="heading">Leave a comment</h2>
                                            <form class="feedback-form" action="#">
                                                <div class="group-input">
                                                    <div class="form-field me-md-30 mb-30 mb-md-0">
                                                        <input type="text" name="name" placeholder="Your Name*" class="input-field">
                                                    </div>
                                                    <div class="form-field">
                                                        <input type="text" name="email" placeholder="Your Email*" class="input-field">
                                                    </div>
                                                </div>
                                                <div class="form-field mt-30">
                                                    <input type="text" name="subject" placeholder="Subject (Optinal)" class="input-field">
                                                </div>
                                                <div class="form-field mt-30">
                                                    <textarea name="message" placeholder="Message" class="textarea-field"></textarea>
                                                </div>
                                                <div class="button-wrap pt-5">
                                                    <button type="submit" value="submit" class="btn btn-custom-size xl-size btn-pronia-primary" name="submit">Post
                                                        Comment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php }} ?>
            <!-- Begin Product Area -->
            <div class="product-area section-space-y-axis-90">
                <div class="container">
                    <div class="row">
                        <div class="section-title-wrap without-tab">
                            <h2 class="section-title">Related Products</h2>
                            <p class="section-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                roots in a piece of classical Latin literature
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="swiper-container product-slider">
                            <div class="swiper-wrapper">
                    <?php
                    include('config.php');
                    $query2 = mysqli_query($con , "SELECT * FROM `plants` ORDER BY RAND() LIMIT 4");
                    if($query2){
						while($row2 = mysqli_fetch_assoc($query2)){
                    ?>
                    <div class="swiper-slide product-item">
                        <div class="product-img">
                            <a href="product-detail.php?id=<?php echo $row2['id']?>">
                                <img class="primary-img" src="<?php echo "./admin/img/plants/".$row2['img']?>" alt="Product Images">
                                <!-- <img class="secondary-img" src="assets/images/product/medium-size/1-10-270x300.jpg" alt="Product Images"> -->
                            </a>
                            <div class="product-add-action">
                            <ul>
                                                        <li>
                                                            <a href="wishlist.php?id=<?php echo $row2['id']?>" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                        <li class="quuickview-btn" >
                                                            <a href="product-detail.php?id=<?php echo $row2['id']?>" data-tippy="View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <a class="product-name" href="product-detail.php?id=<?php echo $row2['id']?>"><?php echo $row2['pname']?></a>
                            <div class="price-box pb-1">
                                <span class="new-price">$<?php echo $row2['price']?></span>
                            </div>
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   <?php
                }}?>
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->

        </main>
        <!-- Main Content Area End Here  -->

        <!-- Begin Footer Area -->
       <?php
       include('footer.php')
       ?>
        <!-- Footer Area End Here -->

        <!-- Begin Modal Area -->
        <div class="modal quick-view-modal fade" id="quickModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-wrap row">
                            <div class="col-lg-6">
                                <div class="modal-img">
                                    <div class="swiper-container modal-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="#" class="single-img">
                                                    <img class="img-full" src="assets/images/product/large-size/1-1-570x633.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#" class="single-img">
                                                    <img class="img-full" src="assets/images/product/large-size/1-2-570x633.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#" class="single-img">
                                                    <img class="img-full" src="assets/images/product/large-size/1-3-570x633.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#" class="single-img">
                                                    <img class="img-full" src="assets/images/product/large-size/1-4-570x633.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pt-5 pt-lg-0">
                                <div class="single-product-content">
                                    <h2 class="title">American Marigold</h2>
                                    <div class="price-box">
                                        <span class="new-price">$23.45</span>
                                    </div>
                                    <div class="rating-box-wrap">
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="review-status">
                                            <a href="#">( 1 Review )</a>
                                        </div>
                                    </div>
                                    <div class="selector-wrap color-option">
                                        <span class="selector-title border-bottom-0">Color</span>
                                        <select class="nice-select wide border-bottom-0 rounded-0">
                                            <option value="default">Black & White</option>
                                            <option value="blue">Blue</option>
                                            <option value="green">Green</option>
                                            <option value="red">Red</option>
                                        </select>
                                    </div>
                                    <div class="selector-wrap size-option">
                                        <span class="selector-title">Size</span>
                                        <select class="nice-select wide rounded-0">
                                            <option value="medium">Medium Size & Poot</option>
                                            <option value="large">Large Size With Poot</option>
                                            <option value="small">Small Size With Poot</option>
                                        </select>
                                    </div>
                                    <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod
                                        tempo incid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                        dolor
                                        in reprehenderit in voluptate</p>
                                    <ul class="quantity-with-btn">
                                        <li class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text">
                                            </div>
                                        </li>
                                        <li class="add-to-cart">
                                            <a class="btn btn-custom-size lg-size btn-pronia-primary" href="cart.html">Add to
                                                cart</a>
                                        </li>
                                        <li class="wishlist-btn-wrap">
                                            <a class="custom-circle-btn" href="wishlist.html">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                        <li class="compare-btn-wrap">
                                            <a class="custom-circle-btn" href="compare.html">
                                                <i class="pe-7s-refresh-2"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="service-item-wrap pb-0">
                                        <li class="service-item">
                                            <div class="service-img">
                                                <img src="assets/images/shipping/icon/car.png" alt="Shipping Icon">
                                            </div>
                                            <div class="service-content">
                                                <span class="title">Free <br> Shipping</span>
                                            </div>
                                        </li>
                                        <li class="service-item">
                                            <div class="service-img">
                                                <img src="assets/images/shipping/icon/card.png" alt="Shipping Icon">
                                            </div>
                                            <div class="service-content">
                                                <span class="title">Safe <br> Payment</span>
                                            </div>
                                        </li>
                                        <li class="service-item">
                                            <div class="service-img">
                                                <img src="assets/images/shipping/icon/service.png" alt="Shipping Icon">
                                            </div>
                                            <div class="service-content">
                                                <span class="title">Safe <br> Payment</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Area End Here -->

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="#">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- Scroll To Top End Here -->

    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->

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
