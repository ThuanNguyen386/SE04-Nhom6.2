<?php
use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\Brand;
use yii\widgets\ActiveForm;

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
                <td><?php echo number_format($item->price,0,' ','.'); ?></td>
                <td><?php echo number_format($item->price* $item->qtt,0,' ','.'); ?></td>
                <td>
                    <?php $form = ActiveForm::begin(
                        [
                            'action' => Url::to(['/cart/update-cart']),
                            'options'=>[
                                'class'=>'form-inline pull-left',
                            ]
                        ]); 
                    ?>
                        <input type="hidden" name="id" value="<?php echo $item->id ?>"/>
                        <input type="text" name="qtt" value="<?php echo $item->qtt ?>" size="4" class="form-control"/>
                        <input type="submit" name="Update" value="Upadte" class="btn btn-sm btn-success"> 
                    <?php ActiveForm::end(); ?>
                    <?php echo Html::a('Delete',['/cart/remove','id'=>$item->id],['class'=>'btn btn-sm btn-danger']); ?>
                </td>
            </tr>
            <?php $n++; endforeach; ?>
            <tr>
                <td colspan="5" align="right">Tổng tiền:</td>
                <td><?php echo number_format($cost,0,' ','.') ?> VNĐ</td>
            </tr>
        </tbody>
    </table>
    <div class="action clearfix">
        <?php echo Html::a('Tiếp tục mua hàng',['/site'],['class'=>'btn btn-succcess']); ?>
        <?php echo Html::a('Xóa giỏ hàng',['/cart/clear'],['class'=>'btn btn-danger']); ?>
        <?php echo Html::a('Đặt hàng',['/checkout/index'],['class'=>'btn btn-primary']); ?>
    <div>
                            <?php else: ?>
                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Thông báo</strong> Giỏ hàng của bạn đang rỗng
                                    <?php echo Html::a('Tiếp tục mua hàng',['/site'],['class'=>'btn btn-succcess']); ?>
                                </div>
    <?php endif; ?>
</div>
