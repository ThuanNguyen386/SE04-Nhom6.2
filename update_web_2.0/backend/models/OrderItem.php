<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "orderitem".
 *
 * @property int $id
 * @property string $buyer_name
 * @property string $buyer_address
 * @property string $buyer_phone
 * @property int $product_id
 * @property int $quantity
 * @property string $buy_date
 * @property int $status
 *
 * @property Product $product
 * @property Status $status0
 * @property Tableorders $tableorders
 */
class OrderItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderitem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'buyer_name', 'buyer_address', 'buyer_phone', 'product_id', 'quantity', 'buy_date'], 'required'],
            [[ 'product_id', 'quantity', 'status'], 'integer'],
            [['buy_date'], 'safe'],
            [['buyer_name', 'buyer_phone'], 'string', 'max' => 50],
            [['buyer_address'], 'string', 'max' => 100],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'buyer_name' => 'Buyer Name',
            'buyer_address' => 'Buyer Address',
            'buyer_phone' => 'Buyer Phone',
            'product_id' => 'Product ID',
            'quantity' => 'Quantity',
            'buy_date' => 'Buy Date',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * Gets query for [[Status0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }

    /**
     * Gets query for [[Tableorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTableorders()
    {
        return $this->hasOne(Tableorders::className(), ['cartitem_id' => 'id']);
    }
}
