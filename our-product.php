
 <!-- Begin Product Area -->
  <div class="product-area section-space-top-100">
            <div class="container">
                <div class="section-title-wrap">
                    <h2 class="section-title mb-0">Our Products</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav product-tab-nav tab-style-1" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="active" id="featured-tab" data-bs-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">
                                Plants
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="latest-tab" data-bs-toggle="tab" href="#latest" role="tab" aria-controls="latest" aria-selected="false">
                                    Accessories
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                <div class="product-item-wrap row">
                                    <?php
                                    include('config.php');
                                    $query = mysqli_query($con,"select * from plants order by id desc");
                                    if($query){
                                        while($row = mysqli_fetch_assoc($query)){
                                    ?>
                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="product-detail.php?id=<?php echo $row['id']?>">
                                                    <img class="primary-img" src="<?php echo "./admin/img/plants/".$row['img']?>" alt="Product Images">
                                                    <!-- <img class="secondary-img" src="assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images"> -->
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
                                                <a class="product-name" href="shop.html"><?php echo $row['pname']?></a>
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
                                    </div>
                                    <?php
                                     }
                                    }?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                                <div class="product-item-wrap row">
                                <?php
                                    $query2 = mysqli_query($con,"select * from accessories order by id desc");
                                    if($query2){
                                        while($row2 = mysqli_fetch_assoc($query2)){
                                    ?>
                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="accessories-detail.php?id=<?php echo $row2['id']?>">
                                                    <img class="primary-img" src="<?php echo "./admin/img/accessories/".$row2['img']?>" alt="Product Images">
                                                    <!-- <img class="secondary-img" src="assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images"> -->
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                           <?php
                                                           if(isset($_SESSION['name']) != NULL){
                                                               $url = 'accessories-wishlist.php?id=' . $row2['id'];
                                                            } else {
                                                               $url = 'login.php';
                                                              
                                                           }
                                                           ?>
                                                          
                                                            <a href="<?php echo $url; ?>" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                        <li class="quuickview-btn">
                                                            <a href="accessories-detail.php?id=<?php echo $row2['id']?>" data-tippy="View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
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
                                                <a class="product-name" href="accessories-detail.php?id=<?php echo $row2['id']?>"><?php echo $row2['name']?></a>
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
                                    </div><?php }}?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->
