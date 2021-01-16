<?php

use mustafaaktas0\futbolcu\models\Takim;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model mustafaaktas0\futbolcu\models\Oyuncu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oyuncu-form">

    <?php $takim=Takim::find()->all();
    $listData=ArrayHelper::map($takim,'takim_adi','takim_adi'); ?>




    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'oyuncu_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'takim_adi')->dropDownList($listData,
        ['prompt'=>'Select...']) ?>

    <?= $form->field($model, 'mevkisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yas')->textInput() ?>

    <?= $form->field($model, 'maas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ulke')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
