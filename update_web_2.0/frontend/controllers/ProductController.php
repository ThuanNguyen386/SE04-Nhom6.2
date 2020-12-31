<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\Product;
use Yii\Data\ActiveDataProvider;

class ProductController extends Controller {



    public function actionIndex($id) {

        $product = Product::findOne($id);
        return $this->render('/product/detail',['product' => $product]);
    }

    public function actionOs($os) {
        if($os == 'IOS'){
            return $this->render('ios');
        }
        elseif($os == 'VOS'){
            return $this->render('vos');
        }
        return $this->render('android');
    }

    public function actionPrice($price) {
        if($price == 'under3'){
            return $this->render('under3');
        }
        if($price == '3to5'){
            return $this->render('3to5');
        }
        if($price == '5to10'){
            return $this->render('5to10');
        }
        return $this->render('above10');
    }

    public function actionView($id) {
        $model = Product::findOne(['id'=>$id]);
        return $this->render('view',[
            'model'=>$model,
        ]);
    }


}
?>