<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OurPride */

$this->title = 'Create Our Pride';
$this->params['breadcrumbs'][] = ['label' => 'Our Prides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-pride-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
