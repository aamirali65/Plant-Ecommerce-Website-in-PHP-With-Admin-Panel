<div class="product-area section-space-top-100">
<div class="container">
    <div class="row">
        <div class="section-title-wrap without-tab">
            <h2 class="section-title">New Products</h2>
            <p class="section-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                roots in a piece of classical Latin literature
            </p>
        </div>
        <div class="col-lg-12">
            <div class="swiper-container product-slider">
                <div class="swiper-wrapper">
                    <?php
                    include('config.php');
                    $query = mysqli_query($con , "SELECT * FROM `plants` ORDER BY RAND() LIMIT 4");
                    if($query){
						while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <div class="swiper-slide product-item">
                        <div class="product-img">
                            <a href="product-detail.php?id=<?php echo $row['id']?>">
                                <img class="primary-img" src="<?php echo "./admin/img/plants/".$row['img']?>" alt="Product Images">
                                <!-- <img class="secondary-img" src="assets/images/product/medium-size/1-10-270x300.jpg" alt="Product Images"> -->
                            </a>
                            <div class="product-add-action">
                            <ul>
                            <li>
                                                           <?php
                                                           if(isset($_SESSION['name']) != NULL){
                                                               $url = 'plants-wishlist.php?id=' . $row['id'];
                                                            } else {
                                                               $url = 'login.php';
                                                              
                                                           }
                                                           ?>
                                                          
                                                            <a href="<?php echo $url; ?>" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                        <li class="quuickview-btn" >
                                                            <a href="product-detail.php?id=<?php echo $row['id']?>" data-tippy="View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
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
                            <a class="product-name" href="product-detail.php?id=<?php echo $row['id']?>"><?php echo $row['pname']?></a>
                            <div class="price-box pb-1">
                                <span class="new-price">$<?php echo $row['price']?></span>
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