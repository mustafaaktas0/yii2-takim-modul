<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mustafaaktas0\futbolcu\models\Oyuncu */

$this->title = 'Create Oyuncu';
$this->params['breadcrumbs'][] = ['label' => 'Oyuncus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oyuncu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
