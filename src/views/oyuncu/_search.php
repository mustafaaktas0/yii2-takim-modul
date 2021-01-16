<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model mustafaaktas0\futbolcu\models\OyuncuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oyuncu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'oyuncu_adi') ?>

    <?= $form->field($model, 'takim_adi') ?>

    <?= $form->field($model, 'mevkisi') ?>

    <?= $form->field($model, 'yas') ?>

    <?= $form->field($model, 'maas') ?>

    <?php // echo $form->field($model, 'ulke') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
