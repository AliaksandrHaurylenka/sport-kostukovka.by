<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_events')->textarea(['rows' => 1]) ?>
    
    <?= $form->field($model, 'photo')->widget(CKEditor::className(), [
  			'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
  					'preset' => 'standard', //разработанны стандартные настройки basic, standard, full
  					'height' => '300',
  				]),
			]); 
	?>

    <?= $form->field($model, 'text_events')->widget(CKEditor::className(), [
  			'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
			]); 
	?>

    <?= $form->field($model, 'date', ['inputOptions' => ['class' => 'form-control-date']])->input('date') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
