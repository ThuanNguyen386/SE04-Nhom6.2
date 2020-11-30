<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="header-container">
            <header id="header">
                <div class="top_header_nav">
                    <div class="container">
                        <div class="row">
                            <div class="nav">
                                <div class="left_top_header col-md-5"></div>
                                <div class="center_top_header col-md-2">
                                </div>
                                <ul id="header_links" class="col-md-5  text-right">
                                    
                                    <li>
                                        <i class="fa fa-heart"></i>
                                        <a href="single_page.html">My Wishlist</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-cart-arrow-down"></i>
                                        <a href="single_page.html">Giỏ hàng</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-facebook-official"></i>
                                        <a href="login.html">Đăng nhập</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End top_header_nav -->
                <div class="center_header_top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="field-search">
                                    <input type="text" class="form-control" name="search_query" value="Search..." id="search_query_top">
                                    <button class="btn button-search">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- End tag center_header_top -->
                <div id="header_menu">
                    <div class="total_menu">
                        <div class="shadow-top-menu"></div>
                        <div class="container">
                            <div class="row">
                                <nav>
                                    <ul>
                                        <li class="active">
                                            <a href="single_page.html"><i class="fa fa-home fa-2x"></i></a>
                                        </li>
                                        <li>
                                            <a href="single_page.html">Điện thoại<i class="fa fa-angle-down"></i></a>
                                            <div class="sub_menu sub_menu_one">
                                                <div class="category">
                                                    <div class="title">
                                                        <a href="single_page.html">Hãng sản xuất</a>
                                                    </div>
                                                    <div class="category-content">
                                                        <ul>
                                                            
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Samsung</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Xiaomi</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Apple</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Oppo</a></li>
															<li><a href=""><i class="fa fa-angle-right"></i> Vsmart</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                                <div class="category">
                                                    <div class="title">
                                                        <a href="single_page.html">Giá bán</a>
                                                    </div>
                                                    <div class="category-content">
                                                        <ul>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Dưới 3 triệu</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Từ 3  triệu - 5 triệu</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Từ 5 triệu - 10 triệu</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Trên 10 triệu</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <div class="title">
                                                        <a href="single_page.html">Hệ điều hành</a>
                                                    </div>
                                                    <div class="category-content">
                                                        <ul>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> HĐH IOS</a></li>
                                                            
                                                            <li><a href=""><i class="fa fa-angle-right"></i> HĐH Android</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single_page.html">Tablet<i class="fa fa-angle-down"></i></a>
                                            <div class="sub_menu sub_menu_two">
                                                <div class="category">
                                                    <div class="title">
                                                        <a href="single_page.html">Hãng sản xuất</a>
                                                    </div>
                                                    <div class="category-content">
                                                        <ul>
                                                            
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Samsung</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Apple</a></li>
                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <div class="title">
                                                        <a href="single_page.html">Giá bán</a>
                                                    </div>
                                                    <div class="category-content">
                                                        <ul>
                                                            
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Từ 5 triệu - 10 triệu</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Trên 10 triệu</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <div class="title">
                                                        <a href="single_page.html">Hệ điều hành</a>
                                                    </div>
                                                    <div class="category-content">
                                                        <ul>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> HĐH IOS</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> HĐH Android</a></li>
                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single_page.html">Laptop<i class="fa fa-angle-down"></i></a>
                                            <div class="sub_menu sub_menu_three">
                                                <div class="category">
                                                    <div class="title">
                                                        <a href="single_page.html">Hãng sản xuất</a>
                                                    </div>
                                                    <div class="category-content">
                                                        <ul>
                                                            
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Acer</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Lenovo</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Apple</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Asus</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <div class="title">
                                                        <a href="single_page.html">Giá bán</a>
                                                    </div>
                                                    <div class="category-content">
                                                        <ul>
                                                            
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Từ 10 triệu - 20 triệu</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Trên 20 triệu</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <div class="title">
                                                        <a href="single_page.html">Hệ điều hành</a>
                                                    </div>
                                                    <div class="category-content">
                                                        <ul>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> HĐH Mac-OS</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> HĐH Windows</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single_page.html">Phụ kiện<i class="fa fa-angle-down"></i></a>
                                            <div class="sub_menu sub_menu_four">
                                                <div class="category">
                                                    <div class="category-content">
                                                        <ul>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Pin - Sạc dự phòng</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Cable kết nối</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Tai nghe - loa</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Thẻ nhớ </a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Bao da - ốp lưng</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Miếng dán màn hình</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Sim 4G</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single_page.html">Hỗ trợ khách hàng<i class="fa fa-angle-down"></i></a>
                                            <div class="sub_menu sub_menu_five">
                                                <div class="category">
                                                    <div class="category-content">
                                                        <ul>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Chính sách đổi trả</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Chính sách bảo hành</a></li>
                                                            <li><a href=""><i class="fa fa-angle-right"></i> Chính sách trả góp</a></li>
															<li><a href=""><i class="fa fa-angle-right"></i> Giao hàng và thanh toán</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                            </div>
                                        </li>
                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End tag header -->
        </div>
        <?php echo $content; ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
