<?php
use yii\helpers\Html;
use backend\models\Brand;

$this->title = 'Shopping Cart';
$brands = Brand::find()->all();
?>

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
    <?php if($cartstore) : $n = 1 ?>
    <table class = "table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cartstore as $item) : ?>
            <tr>
                <td><?php echo $n; ?></td>
                <td><?php echo $item->name; ?></td>
                <td><?php echo $item->qtt; ?></td>
                <td><?php echo $item->price; ?></td>
                <td><?php echo $item->price* $item->qtt?></td>
                <td><?php echo Html::a('Delete',['/cart/remove','id'=>$item->id]); ?></td>
            </tr>
            <?php $n++; endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
</div>
