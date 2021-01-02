<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\Brand;
use backend\models\Product;

$this->title = 'My Yii Application';
?>
<?php
$products = Product::findApple()->all();
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
                            <li><i class="fa fa-camera"></i> <?= Html::a($items->brand, ['/brand/index','id'=>$items->id]); ?></li>
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
            <h2 class="block-title"></h2>
            <div class="product-carousel">
                <?php foreach($products as $items) : ?>

                    <div class="product-item">

                        <div class="container">
                            <div class="item item-type-zoom">
                                <a class="item-hover" href="single_page.html">
                                    <div class="item-info">
                                        <div class="headline">
                                            <div class="date">Ram: <?php echo $items->Ram ?> GB</div>
                                            <div class="line"></div>
                                            <div class="date">Rom: <?php echo $items->Rom ?> GB</div>
                                        </div>
                                    </div>
                                    <div class="mask"></div>
                                </a>
                                <div class="item-img"><img src="<?php echo $items->image ?>" alt=""></div>
                            </div>
                        </div>
                        <div class="product-name">
                            <p><span class="name"><?php echo $items->name ?></span><span class="product-price"><?php echo number_format($items->price,0,' ','.'); ?></span></p>
                        </div>
                        <div class="product-button">
                            <div class="add-to-cart">
                                <span>
                                    <?php echo Html::a ('<i class="fa fa-shopping-cart"></i> Thêm vào giỏ',['/cart/add-cart','id'=>$items->id]); ?>
                                </span>
                            </div>
                            <div>
                                <span>
                                    <?php echo Html::a ('<i class="fa fa-eye"></i>',['/product/index','id'=>$items->id]); ?>
                                </span>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="control-button">
                <span class="step-backward carousel-prev"><i class="fa fa-step-backward"></i></span>
                <span class="step-forward carousel-next"><i class="fa fa-step-forward"></i></span>
            </div>


        </div>
    </div>


<?php endif; ?>