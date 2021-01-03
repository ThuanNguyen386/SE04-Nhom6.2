<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\components\Cart;
use frontend\models\Checkout;
use backend\models\OrderItem;

class CheckoutController extends Controller {
    function actionIndex() {
        $model = new Checkout();
        $cart = new Cart();
        $cartstore = $cart->cartstore;
        $cost = $cart->getCost;
        if($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post()['Checkout'];
            foreach($cartstore as $item) :
            {
                $orderItem = new OrderItem;
                $orderItem->buyer_name = $post['buyer_name'];
                $orderItem->buyer_phone = $post['buyer_phone'];
                $orderItem->buyer_address = $post['buyer_address'];
                $orderItem->buy_date =  date('Y-m-d');
                $orderItem->product_id = $item->id;
                $orderItem->quantity = $item->qtt;
                if($orderItem->save())
                {
                    $cart = new Cart();
                    $cart->removeall();
                    echo "<script type='text/javascript'>alert('Dat hang thanh cong');</script>";
                }
            }
            endforeach;
        }   
        return $this->render('index',[
            'model' => $model,
            'cartstore' => $cartstore,
            'cost' => $cost,
         ]);
    }
}
?>