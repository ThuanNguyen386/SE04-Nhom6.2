<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use backend\models\Product;

$this->title = 'My Yii Application';
?>
<?php
$products = Product::findUnder3()->all();

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


<?php endif; ?>