<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OurPride */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Our Prides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-pride-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_our_pride], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_our_pride], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_our_pride',
            'name',
            'name_en',
            'id_sport_section',
            'description:ntext',
        ],
    ]) ?>

</div>
