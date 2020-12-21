<?php
namespace frontend\models;

use Yii;
use Yii\base\Model;

class Checkout extends Model 
{
    public $buyer_name;
    public $buyer_address;
    public $buyer_phone;
    public $amount;

    public function rules() {
        return [
            [['buyer_name','buyer_address','buyer_phone'],'required','message'=>'(attribute) không được để rỗng'],
            [['buyer_name','buyer_address','buyer_phone'],'string'],
            [['amount'],'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'buyer_name' => 'Họ và tên',
            'buyer_address' => 'Địa chỉ giao hàng',
            'buyer_phone' => 'SĐT người nhận',
        ];
    }
}
?>