<?php
namespace frontend\controllers;
use yii\web\Controller;
use backend\models\Product;


class ProductController extends Controller {
    public function actionIndex() {

    }

    public function actionView($id) {
        $model = Product::findOne(['id'=>$id]);
        return $this->render('view',[
            'model'=>$model,
        ]);
    }
}
?>