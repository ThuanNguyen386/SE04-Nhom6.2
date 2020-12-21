<?php

/* @var $this yii\web\View */

use backend\models\Brand;
use yii\helpers\Html;
use backend\models\Product;

$this->title = 'My Yii Application';
?>
<?php  
    $products = Product::find()->all();
    $brands = Brand::find()->all();
?>
<?php if($products) : ?>
    
   <div id="header_mobile_menu"></div>
        <div class="columns-container"></div>
        <div class="static-home-bottom"></div>
        <div class="container">
            <div class="sidebar col-md-3">
                <div class="category">
                    <h2 class="title"><i class="fa fa-bars"></i> Categories</h2>
                    <ul>
                    <?php if($brands) :  ?>
                    <?php foreach($brands as $items) : ?>
                        <li><a href=""><i class="fa fa-camera"></i><?php echo $items->brand ?></a></li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="content col-md-9">
                <div class="slider">
                    <div id="slideshow">
                        <ul>
                            <li class="current"><img src="images/slide1.jpg" /></li>
                            <li><img src="images/slide2.jpg" /></li>
                            <li><img src="images/slide3.png" /></li>
                            
                        </ul>
                        <span id="prev"></span>
                        <span id="next"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hot-product">
                <h2 class="block-title">Sản Phẩm Bán Chạy</h2>
            <?php foreach($products as $items) : ?>
                    <div class="product-item">
                        <div class="container">
                            <div class="item item-type-zoom">
                                <a class="item-hover" href="single_page.html">
                                    <div class="item-info">
                                        <div class="headline">
                                            Xem chi tiết
                                            <div class="line"></div>
                                            <div class="date"><?php echo $items->name ?></div>
                                        </div>
                                    </div>
                                    <div class="mask"></div>
                                </a>
                                <div class="item-img"><img src="<?php echo $items->image ?>" alt=""></div>
                            </div>
                        </div>
                        <div class="product-name">
                            <p><span class="name"><?php echo $items->name ?></span><span class="product-price"><?php echo $items->price ?></span></p>
                        </div>
                        <div class="product-button">
                            <div class="add-to-cart">
                                <p>
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>
                                    <?php echo Html::a('ADD TO CART',['/cart/add-cart','id'=>$items->id]); ?>
                                    </span>
                                </p>
                            </div>
                            <div class="add-to-wishlist">
                                <p><i class="fa fa-heart"></i></p>
                            </div>
                            <div class="add-to-compare">
                                <p><i class="fa fa-plus-circle"></i></p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
            <?php endforeach; ?> 
    </div>
<?php endif; ?>