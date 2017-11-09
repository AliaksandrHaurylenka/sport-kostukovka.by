<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Service */

$this->title = 'Update Service: ' . $model->id_service;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_service, 'url' => ['view', 'id' => $model->id_service]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
