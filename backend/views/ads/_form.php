<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Ads */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ads-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_ads')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'text_ads')->widget(CKEditor::className(),[
			    'editorOptions' => [
			        'preset' => 'standard', //разработанны стандартные настройки basic, standard, full
			        'inline' => false, //по умолчанию false
			    ],
			]); 
	?>

    <?= $form->field($model, 'date', ['inputOptions' => ['class' => 'form-control-date']])->input('date') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
