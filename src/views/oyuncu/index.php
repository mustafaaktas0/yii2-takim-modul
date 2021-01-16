<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel mustafaaktas0\futbolcu\models\OyuncuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oyuncus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oyuncu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Oyuncu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'oyuncu_adi',
            'takim_adi',
            'mevkisi',
            'yas',
            'maas',
            //'ulke',
            //'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
