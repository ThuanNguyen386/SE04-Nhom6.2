<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\Brand;


class BrandController extends Controller {
    public function actionIndex($id) {
        if($id == 1){
            return $this->render('apple');
        }
        elseif($id == 2){
            return $this->render('samsung');
        }
        elseif($id == 3){
            return $this->render('vsmart');
        }
        elseif($id == 4){
            return $this->render('xiaomi');
        }
        return $this->render('oppo');
    }


    public function actionView($id) {
        $model = Product::findOne(['id'=>$id]);
        return $this->render('view',[
            'model'=>$model,
        ]);
    }


}
?>