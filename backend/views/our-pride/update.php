<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OurPride */

$this->title = 'Update Our Pride: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Our Prides', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_our_pride]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="our-pride-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
