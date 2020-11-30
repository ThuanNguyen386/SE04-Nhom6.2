<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\components\Cart;
use backend\models\Product;

/*
Class quan ly gio hang
*/

class CartController extends Controller {
    function actionIndex() {
        $cart = new Cart();
        $cartstore = $cart->cartstore;
        return $this->render('index',[
            'cartstore' => $cartstore,
        ]);
    }

    public function actionAddCart($id) {
        $cart = new Cart();
        $model = Product::findOne(['id'=>$id]);

        $cart->add($model);
        return $this->redirect(['/cart']);
    }

    public function actionRemove($id) {
        $cart = new Cart();
        $model = Product::findOne(['id'=>$id]);

        $cart->remove($model);
        return $this->redirect(['/cart']);
    }
}
?>