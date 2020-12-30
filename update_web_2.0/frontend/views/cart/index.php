<?php
use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\Brand;
use yii\widgets\ActiveForm;

$this->title = 'Shopping Cart';
$brands = Brand::find()->all();
?>



<div class="container">
    <div class="clearfix breadcrumb">
        <span>Thông tin giỏ hàng</span>
    </div>
    <?php if($cartstore) : $n = 1 ?>
    <table class = "table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Giá tiền</th>
                <th>Tổng tiền</th>
                <th>Số lượng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cartstore as $item) : ?>
            <tr>
                <td><?php echo $n; ?></td>
                <td><?php echo $item->name; ?></td>
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
                    <?php echo Html::a('Delete',['/cart/remove','id'=>$item->id],['class'=>'btn btn-sm btn-danger']); ?>
                    <?php ActiveForm::end(); ?>

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
