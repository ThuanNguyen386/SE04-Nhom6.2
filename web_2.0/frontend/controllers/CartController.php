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
        $cost = $cart->getCost;
        $totalItem = $cart->getTotalItem();
        return $this->render('index',[
            'cartstore' => $cartstore,
            'cost' => $cost,
            'totalItem' => $totalItem,
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

    public function actionUpdateCart() {
        $cart = new Cart();
        if(Yii::$app->request->post())
        {
            $qtt = $_POST['qtt'];
            $id = $_POST['id'];
            $cart->update($id,$qtt);
        }
        return $this->redirect(['/cart']);
    }

    public function actionClear() {
        $cart = new Cart();
        $cart->removeall();
        return $this->redirect(['/cart']);
    }
}
?>