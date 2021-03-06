<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use backend\models\Brand;
use backend\models\Product;

AppAsset::register($this);
?>
<?php
$this->beginPage();
$brands = Brand::find()->all();
?>
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
                                <?php echo Html::a ('<i class="fas fa-shopping-cart" style="color:black"></i> Giỏ Hàng',['/cart/index']); ?>
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
                        <img src="images/logo.png" />
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
                                    <?php echo Html::a('<i class="fa fa-home fa-2x"></i>',['/site/index']); ?>
                                </li>


                                <li>
                                    <a href="single_page.html">Hệ điều hành<i class="fa fa-angle-down"></i></a>
                                    <div class="sub_menu sub_menu_four">
                                        <div class="category">
                                            <div class="category-content">
                                                <ul>
                                                    <li><?= Html::a('<i class="fa fa-angle-right"></i> IOS', ['/product/os','os'=>'IOS']); ?></li>

                                                    <li><?= Html::a('<i class="fa fa-angle-right"></i> Android', ['/product/os','os'=>'Android']); ?></li>

                                                    <li><?= Html::a('<i class="fa fa-angle-right"></i> VOS', ['/product/os','os'=>'VOS']); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                    </div>
                                </li>

                                <li>
                                    <a href="single_page.html">Giá bán<i class="fa fa-angle-down"></i></a>
                                    <div class="sub_menu sub_menu_four">
                                        <div class="category">
                                            <div class="category-content">
                                                <ul>
                                                    <li><?= Html::a('<i class="fa fa-angle-right"></i> Dưới 3 triệu', ['/product/price','price'=>'under3']); ?></li>
                                                    <li><?= Html::a('<i class="fa fa-angle-right"></i> Từ 3 triệu - 5 triệu', ['/product/price','price'=>'3to5']); ?></li>
                                                    <li><?= Html::a('<i class="fa fa-angle-right"></i> Từ 5 triệu - 10 triệu', ['/product/price','price'=>'5to10']); ?></li>
                                                    <li><?= Html::a('<i class="fa fa-angle-right"></i> Trên 10 triệu', ['/product/price','price'=>'above10']); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                    </div>
                                </li>

                                <li>
                                    <a href="single_page.html">Hỗ trợ khách hàng<i class="fa fa-angle-down"></i></a>
                                    <div class="sub_menu sub_menu_four">
                                        <div class="category">
                                            <div class="category-content">
                                                <ul>
                                                    <li><?= Html::a('<i class="fa fa-angle-right"></i> Đổi trả & bảo hành', ['/support/index','support'=>'warranty']); ?></li>
                                                    <li><?= Html::a('<i class="fa fa-angle-right"></i> Chính sách trả góp', ['/support/index','support'=>'installment']); ?></li>

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

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        slideshow(3000);
        carouselshow(5000);
    });

    function carousel() {
        var carousel = $('.product-carousel');
        var left = parseInt(carousel.css('left'));
        if (left < -1000) left = 0;
        left -= 283;
        carousel.animate({
            left: left
        }, 1000);
    }

    function carouselshow(time) {
        var idset = setInterval('carousel()', time);
        // Carousel
        $('.carousel-prev').click(function() {
            var carousel = $('.product-carousel');
            var left = parseInt(carousel.css('left'));
            if (left == 0) left = -283 * 4;
            left += 283;
            carousel.animate({
                left: left
            }, 500);
            clearInterval(idset);
            idset = setInterval('carousel()', time);
        });
        $('.carousel-next').click(function() {
            var carousel = $('.product-carousel');
            var left = parseInt(carousel.css('left'));
            if (left < -1000) left = 0;
            left -= 283;
            // if (left < -4000) left = 0;
            carousel.animate({
                left: left
            }, 500);
            clearInterval(idset);
            idset = setInterval('carousel()', time);
        });
    }

    function slide(prev) {
        var slides = $('#slideshow li');
        var currElement = slides.filter('.current');
        var lastElement = slides.filter(':last');
        var firstElement = slides.filter(':first');
        var nextElement = (prev) ? currElement.prev() : currElement.next();

        if (prev) {
            if (firstElement.attr('class') == 'current')
                nextElement = lastElement;
        } else if (lastElement.attr('class') == 'current') {
            nextElement = firstElement;
        }

        fade(currElement, nextElement);
    }

    function fade(current, next) {
        if (true) {
            current.removeClass('current').find('img').css({
                'z-index': '5'
            });
            next.addClass('current').find('img').css({
                'opacity': '0',
                'z-index': '10'
            }).animate({
                opacity: 1
            }, 800, function() {
                current.find('img').css({
                    'z-index': '0'
                });
            });
        } else {
            current.removeClass('current').find('img').css({
                'z-index': '5'
            });
            next.addClass('current').find('img').css({
                'opacity': '0',
                'z-index': '10'
            }).animate({
                opacity: 1
            }, 800, function() {
                current.find('img').css({
                    'z-index': '0'
                });
            });
        }
    }

    function slideshow(time) {
        var idset = setInterval('slide()', time);
        $('#next').click(function() {
            slide();
            clearInterval(idset);
            idset = setInterval('slide()', time);
        });
        $('#prev').click(function() {
            slide(true);
            clearInterval(idset);
            idset = setInterval('slide()', time);
        });
    }
</script>
<?php echo $content; ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
