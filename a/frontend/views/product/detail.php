
<?php

/* @var $this yii\web\View */

use backend\models\Brand;
use yii\helpers\Html;
use backend\models\Product;


$this->title = 'My Yii Application';
?>
<?php
$products = Product::findBest()->all();
$brands = Brand::find()->all();
?>

<?php if($product) : ?>
    <div id="header_mobile_menu"></div>
    <div class="columns-container"></div>
    <div class="static-home-bottom"></div>
    <div class="container-fluid single_page">

        <div class="container">
            <div class="clearfix breadcrumb">
                <span>Chi tiết sản phẩm</span>
            </div>

            <div class="image-gallery col-md-5">

                <div class="image-view">
                    <div class="product-item">
                        <img src="<?php echo $product->image ?>" class="main-image">
                    </div>
                </div>
            </div>
            <div class="information-detail col-md-7">
                <h4 class="product-name"><?php echo $product->name ?></h4>
                <br>
                <label>Tình trạng: </label> <span class="info">Mới</span>
                <br>

                <label>Giá bán :</label> <span class="info"><?php echo number_format($product->price,0,' ','.') ?> vnđ</span>
                <br>
                <label>Khuyến mãi: </label>
                <ul class="detail-sale-off">
                    <li>Đặt hàng ngay để nhận ưu đãi lớn:</li>
                    <li>Sạc dự phòng Sony phiên bản 007 Spectre 8000mAh</li>
                    <li>Thẻ nhớ 32GB</li>
                </ul>
                <?php echo Html::a ('<span class="button-add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</span>',['/cart/add-cart','id'=>$product->id]); ?>

            </div>
            <div class="col-md-8 product-detail">
                <h3 class="block-title">Thông số kĩ thuật</h3>
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Màn hình: </td>
                        <td><?php echo $product->display ?></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Camera sau:</td>
                        <td><?php echo $product->camera_sau ?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Camera trước:</td>
                        <td><?php echo $product->camera_truoc ?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Hệ điều hành:</td>
                        <td><?php echo $product->os ?></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>CPU:</td>
                        <td><?php echo $product->CPU ?></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>RAM</td>
                        <td><?php echo $product->Ram ?></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Bộ nhớ trong: </td>
                        <td><?php echo $product->Rom ?>B</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Số khe sim:</td>
                        <td><?php echo $product->SIM ?></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Dung lượng pin:</td>
                        <td><?php echo $product->Pin ?></td>
                    </tr>
                    </tbody>
                </table>

            </div>


        </div>
    </div>
<?php endif; ?>