<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\Product;


class ProductController extends Controller {
    public function actionIndex() {

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

    public function actionView($id) {
        $model = Product::findOne(['id'=>$id]);
        return $this->render('view',[
            'model'=>$model,
        ]);
    }


}
?>