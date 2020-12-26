<?php

/* @var $this yii\web\View */

use backend\models\Brand;
use yii\helpers\Html;
use backend\models\Product;

$this->title = 'My Yii Application';
?>
<?php
$products = Product::findIos()->all();
$brands = Brand::find()->all();
?>
<?php if($products) : ?>


    <div class="container">

            <h2 class="block-title"></h2>

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
                            <p><span class="name"><?php echo $items->name ?></span><span class="product-price"><?php echo number_format($items->price,0,' ','.'); ?></span></p>
                        </div>
                        <div class="product-button">
                            <div class="add-to-cart">
                                <p>
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>
                                    <?php echo Html::a ('ADD TO CART',['/cart/add-cart','id'=>$items->id]); ?>
                                    </span>
                                </p>
                            </div>
                            <div class="add-to-wishlist">
                                <p><i class="fa fa-heart"></i></p>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>


    </div>


<?php endif; ?>