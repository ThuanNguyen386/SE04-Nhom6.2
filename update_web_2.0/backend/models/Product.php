<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $brand_id
 * @property string $name
 * @property int $price
 * @property int $Ram
 * @property int $Rom
 * @property string $CPU
 * @property int $Pin
 * @property string $SIM
 * @property string $image
 * @property string $best_seller
 *
 * @property Cartitem[] $cartitems
 * @property Brand $brand
 */

class Product extends \yii\db\ActiveRecord
{
    public $qtt;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_id', 'name', 'price', 'Ram', 'Rom', 'CPU', 'Pin', 'SIM'], 'required'],
            [['brand_id', 'price', 'Ram', 'Rom', 'Pin'], 'integer'],
            [['name', 'CPU', 'SIM','best_seller'], 'string', 'max' => 50],
            [['image'], 'file', 'extensions' => 'jpg,png,gif'],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_id' => 'Brand ID',
            'name' => 'Name',
            'price' => 'Price',
            'Ram' => 'Ram',
            'Rom' => 'Rom',
            'CPU' => 'Cpu',
            'Pin' => 'Pin',
            'SIM' => 'Sim',
            'image' => 'Upload Image',
            'best_seller' => 'Best seller'
        ];
    }

    /**
     * Gets query for [[Cartitems]].
     *
     * @return \yii\db\ActiveQuery
     */

    public function findBest()

    {

        return parent::find()->where(['best_seller' => 'Yes']);

    }

    public function getCartitems()
    {
        return $this->hasMany(Cartitem::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Brand]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }
}
