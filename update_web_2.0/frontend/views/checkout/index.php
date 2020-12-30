<?php

$this->title = "Thông tin đặt hàng";
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use backend\models\Brand;

$model->amount = $cost;
$brands = Brand::find()->all();
?>  


<div class="container">
    <div class="clearfix breadcrumb">
        <span>Tiến hành đặt hàng</span>
    </div>

    <?php if($cartstore) : $n = 1; ?>
    <?php $form = ActiveForm::begin(); ?>
<div class="col-md-5">
    <h3>Thông tin khách hàng</h3>

        <?php echo $form->field($model,'buyer_name')->textInput(['placeholder'=>'Họ và tên..']); ?>
        <?php echo $form->field($model,'buyer_address')->textInput(['placeholder'=>'Địa chỉ giao hàng..']); ?>
        <?php echo $form->field($model,'buyer_phone')->textInput(['placeholder'=>'SĐT người nhận..']); ?>


</div>
    <div class="col-md-7">
        <h3>Thông tin sản phẩm</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá tiền</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cartstore as $item) : ?>
                    <tr>
                        <td><?php echo $n; ?></td>
                        <td><?php echo $item->name; ?></td>
                        <td><?php echo $item->qtt; ?></td>
                        <td><?php echo number_format($item->price,0,' ','.'); ?></td>
                        <td><?php echo number_format($item->price*$item->qtt,0,' ','.'); ?></td>
                    </tr>
                <?php $n++; endforeach; ?>
                <tr>
                    <td colspan="5" align="right">Tổng tiền</td>
                    <td><?php echo number_format($cost,0,' ','.'); ?>VND</td>
                </tr>
                <tr>
                    <td colspan="5" align="right">Ngày đặt</td>
                    <td><?php echo date('d-m-Y'); ?></td>
                </tr>
            </tbody>
        </table>

        <button type="submit" class = "btn btn-primary pull-right">Xác nhận thanh toán</button>
    </div>
    <?php ActiveForm::end(); ?>
<?php else: ?>
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Thông báo</strong>Giỏ hàng của bạn đang rỗng ... <?php echo Html::a('Tiếp tục mua hàng',['/site'],['class'=>'btn btn-success']); ?>
    </div>
<?php endif; ?>
</div>