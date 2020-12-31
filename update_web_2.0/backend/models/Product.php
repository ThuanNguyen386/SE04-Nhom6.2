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
 * @property string $os
 * @property string $display
 * @property string $camera_truoc
 * @property string $camera_sau
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
            [['brand_id', 'name', 'os', 'price', 'Ram', 'Rom', 'CPU', 'Pin', 'SIM', 'best_seller','display','camera_truoc', 'camera_sau'], 'required'],
            [['brand_id', 'price', 'Ram', 'Rom', 'Pin'], 'integer'],
            [['name', 'os', 'CPU', 'SIM','best_seller','display','camera_truoc', 'camera_sau'], 'string', 'max' => 60],
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
            'os' => 'OS',
            'price' => 'Price',
            'Ram' => 'Ram',
            'Rom' => 'Rom',
            'CPU' => 'Cpu',
            'Pin' => 'Pin',
            'SIM' => 'Sim',
            'image' => 'Upload Image',
            'best_seller' => 'Best seller',
            'display' => 'Display',
            'camera_truoc' => 'Main camera',
            'camera_sau' => 'Selfie camera'
        ];
    }

    /**
     * Gets query for [[Cartitems]].
     *
     * @return \yii\db\ActiveQuery
     */

    public function findApple()
    {
        return parent::find()->where(['brand_id' => 1]);
    }

    public function findSamsung()
    {
        return parent::find()->where(['brand_id' => 2]);
    }

    public function findVsmart()
    {
        return parent::find()->where(['brand_id' => 3]);
    }

    public function findXiaomi()
    {
        return parent::find()->where(['brand_id' => 4]);
    }

    public function findOppo()
    {
        return parent::find()->where(['brand_id' => 5]);
    }

    public function findIos()
    {
        return parent::find()->where(['os' => 'iOS']);
    }

    public function findVos()
    {
        return parent::find()->where(['os' => 'VOS']);
    }

    public function findAndroid()
    {
        return parent::find()->where(['os' => 'Android']);
    }

    public function findBest()
    {
        return parent::find()->where(['best_seller' => 'Yes']);
    }

    public function findUnder3()
    {
        return parent::find()->where(['<','price','3000000']);
    }

    public function find3to5()
    {
        return parent::find()->where(['and', 'price>=3000000', 'price<=5000000']);
    }

    public function find5to10()
    {
        return parent::find()->where(['and', 'price>=5000000', 'price<=10000000']);
    }

    public function findAbove10()
    {
        return parent::find()->where(['>','price','10000000']);
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
