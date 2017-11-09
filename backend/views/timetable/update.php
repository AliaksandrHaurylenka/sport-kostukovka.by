<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Timetable */

$this->title = 'Update Timetable: ' . $model->id_timetable;
$this->params['breadcrumbs'][] = ['label' => 'Timetables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_timetable, 'url' => ['view', 'id' => $model->id_timetable]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="timetable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
