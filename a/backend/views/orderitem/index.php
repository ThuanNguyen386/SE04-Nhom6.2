<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\OrderitemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orderitems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderitem-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orderitem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'buyer_name',
            'buyer_address',
            'buyer_phone',
            'product_id',
            //'quantity',
            //'buy_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
