<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coaches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coach-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Coach', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_coach',
            'name',
            'name_en',
            'id_sport_section',
            'description:ntext',
            'archive',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
