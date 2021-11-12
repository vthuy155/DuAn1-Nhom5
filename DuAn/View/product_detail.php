<?php
include 'header.php';
?>
<!-- BANNER STRAT -->
<div class="banner inner-banner">
    <div class="container">
        <div class="bread-crumb mtb-60 center-xs">
            <div class="page-title">Women</div>
            <div class="bread-crumb-inner right-side float-none-xs">
                <ul>
                    <li><a href="index.html">Home</a><i class="fa fa-angle-right"></i></li>
                    <li><span>Women</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- BANNER END -->

<!-- CONTAIN START -->
<section class="container">
    <div class="pro-page pt-55">
        <div class="row">
            <div class="col-md-5 col-sm-5 mb-xs-30">
                <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native">
                    <a href="#"><img src="images/1.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="images/2.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="images/3.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="images/4.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="images/5.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="images/6.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="images/4.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="images/5.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="images/6.jpg" alt="Streetwear"></a>
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="product-detail-main">
                            <div class="product-item-details">
                                <h1 class="product-item-name">Cross Colours Camo Print Tank half mengo</h1>
                                <div class="rating-summary-block">
                                    <div title="53%" class="rating-result">
                                        <span style="width:53%"></span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <span class="price">$80.00</span>
                                    <del class="price old-price">$100.00</del>
                                </div>
                                <div class="product-info-stock-sku">
                                    <div>
                                        <label>Availability: </label>
                                        <span class="info-deta">In stock</span>
                                    </div>
                                    <div>
                                        <label>SKU: </label>
                                        <span class="info-deta">20MVC-18</span>
                                    </div>
                                </div>
                                <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada </p>
                                <div class="product-size select-arrow mb-20 mt-30">
                                    <label>Size</label>
                                    <select class="selectpicker form-control" id="select-by-size">
                                        <option selected="selected" value="#">S</option>
                                        <option value="#">M</option>
                                        <option value="#">L</option>
                                    </select>
                                </div>
                                <div class="product-color select-arrow mb-20">
                                    <label>Color</label>
                                    <select class="selectpicker form-control" id="select-by-color">
                                        <option selected="selected" value="#">Blue</option>
                                        <option value="#">Green</option>
                                        <option value="#">Orange</option>
                                        <option value="#">White</option>
                                    </select>
                                </div>
                                <div class="mb-40">
                                    <div class="product-qty">
                                        <label for="qty">Qty:</label>
                                        <div class="custom-qty">
                                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>
                                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="qty">
                                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>
                                        </div>
                                    </div>
                                    <div class="bottom-detail cart-button">
                                        <ul>
                                            <li class="pro-cart-icon">
                                                <form>
                                                    <button title="Add to Cart" class="btn-black"><span></span>Add to Cart</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="detail-inner-left">
                                    <ul>
                                        <!-- <li class="pro-cart-icon">
                        <form>
                          <button title="Add to Cart"><span></span></button>
                        </form>
                      </li> -->
                                        <li class="pro-wishlist-icon"><a href="#"></a></li>
                                        <li class="pro-compare-icon"><a href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="share-link">
                                    <label>Share This : </label>
                                    <div class="social-link">
                                        <ul class="social-icon">
                                            <li><a class="facebook" title="Facebook" href="#"><i class="fa fa-facebook"> </i></a></li>
                                            <li><a class="twitter" title="Twitter" href="#"><i class="fa fa-twitter"> </i></a></li>
                                            <li><a class="linkedin" title="Linkedin" href="#"><i class="fa fa-linkedin"> </i></a></li>
                                            <li><a class="rss" title="RSS" href="#"><i class="fa fa-rss"> </i></a></li>
                                            <li><a class="pinterest" title="Pinterest" href="#"><i class="fa fa-pinterest"> </i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="ptb-85">
        <div class="product-detail-tab flipInX">
            <div class="row">
                <div class="col-md-12">
                    <div id="tabs">
                        <ul class="nav nav-tabs">
                            <li><a class="tab-Description selected" title="Description">Description</a></li>
                            <li><a class="tab-Product-Tags" title="Product-Tags">Product-Tags</a></li>
                            <li><a class="tab-Reviews" title="Reviews">Reviews</a></li>
                        </ul>
                    </div>
                    <div id="items">
                        <div class="tab_content">
                            <ul>
                                <li>
                                    <div class="items-Description selected">
                                        <div class="Description"> <strong>The standard Lorem Ipsum passage, used since the 1500s</strong><br />
                                            <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets</p>
                                            <p>Tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="items-Product-Tags"><strong>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</strong><br />
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur</div>
                                </li>
                                <li>
                                    <div class="items-Reviews">
                                        <div class="comments-area">
                                            <h4>Comments<span>(2)</span></h4>
                                            <ul class="comment-list mt-30">
                                                <li>
                                                    <div class="comment-user"> <img src="images/comment-user.jpg" alt="Streetwear"> </div>
                                                    <div class="comment-detail">
                                                        <div class="user-name">John Doe</div>
                                                        <div class="post-info">
                                                            <ul>
                                                                <li>Fab 11, 2017</li>
                                                                <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                                    </div>
                                                    <ul class="comment-list child-comment">
                                                        <li>
                                                            <div class="comment-user"> <img src="images/comment-user.jpg" alt="Streetwear"> </div>
                                                            <div class="comment-detail">
                                                                <div class="user-name">John Doe</div>
                                                                <div class="post-info">
                                                                    <ul>
                                                                        <li>Fab 11, 2017</li>
                                                                        <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="comment-user"> <img src="images/comment-user.jpg" alt="Streetwear"> </div>
                                                            <div class="comment-detail">
                                                                <div class="user-name">John Doe</div>
                                                                <div class="post-info">
                                                                    <ul>
                                                                        <li>Fab 11, 2017</li>
                                                                        <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="comment-user"> <img src="images/comment-user.jpg" alt="Streetwear"> </div>
                                                    <div class="comment-detail">
                                                        <div class="user-name">John Doe</div>
                                                        <div class="post-info">
                                                            <ul>
                                                                <li>Fab 11, 2017</li>
                                                                <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-form mt-30">
                                            <h4>Leave a comments</h4>
                                            <div class="row mt-30">
                                                <form>
                                                    <div class="col-sm-4 mb-20">
                                                        <input type="text" placeholder="Name" required>
                                                    </div>
                                                    <div class="col-sm-4 mb-20">
                                                        <input type="email" placeholder="Email" required>
                                                    </div>
                                                    <div class="col-sm-4 mb-20">
                                                        <input type="text" placeholder="Website" required>
                                                    </div>
                                                    <div class="col-xs-12 mb-20">
                                                        <textarea cols="30" rows="3" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <button class="btn-black" name="submit" type="submit">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="pb-85">
        <div class="product-slider owl-slider">
            <div class="row">
                <div class="col-xs-12">
                    <div class="heading-part align-center mb-40">
                        <h2 class="main_title">Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-slider-main position-r">
                    <div class="owl-carousel pro_cat_slider">
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <div class="sale-label"><span>Sale</span></div>
                                    <a href="product-page.html">
                                        <img src="images/1.jpg" alt="Streetwear">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                        <del class="price old-price">$100.00</del>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                        <span class="label-review"><span>( 2 review )</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-page.html">
                                        <img src="images/2.jpg" alt="">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-page.html">
                                        <img src="images/3.jpg" alt="">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-page.html">
                                        <img src="images/4.jpg" alt="">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-page.html">
                                        <img src="images/5.jpg" alt="">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-page.html">
                                        <img src="images/6.jpg" alt="">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-page.html">
                                        <img src="images/7.jpg" alt="">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTAINER END -->
<?php
include 'footer.php';
?>