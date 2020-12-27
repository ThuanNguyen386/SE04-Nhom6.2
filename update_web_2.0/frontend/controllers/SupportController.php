<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;



class SupportController extends Controller {
    public function actionIndex($support) {
        if($support == 'warranty'){
            return $this->render('warranty');
        }
        return $this->render('installment');
    }




}
?><?php
