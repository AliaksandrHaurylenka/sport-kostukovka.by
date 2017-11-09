<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Html;
use yii\data\Pagination;
use frontend\models\Events;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;

$pagination = new Pagination([
  'defaultPageSize' => 1,
  'totalCount' => Events::find()->count(),
]);

$events = Events::find()
            ->orderBy('date DESC')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
            
?>

<!-- МОДАЛЬНОЕ ОКНО "СПОРТ. СОБЫТИЯ" -->
<!--noindex-->
<div class="modal fade" id="modal_events" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Спортивные события</h4>
      </div>
      <div class="modal-body news">
        <?php Pjax::begin(); ?>
          <?php fancybox('events'); ?>
	        <?php foreach ($events as $result): ?>
	            <h2><?= $result->name_events; ?></h2>
	            <p class="date">
	              <?php 
	                $date = date_create($result->date);//получение даты, которую нужно вывести в нужном формате
	                echo date_format($date, 'd.m.Y');//вывод даты в нужном формате
	              ?>  
	            </p>
	            <!-- КОНТЕНТ -->
              <!-- Блок в котором мы будем отображать увеличенное фото -->
              <div class="img_big_block">
                <img src="">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              </div>
              
              <!-- Блок с уменьшенными фото -->
	            <div class="photo_events my-flex-container_15">
      					<?= $result->photo; ?>
				      </div>
	            
	            <?= $result->text_events; ?> 
	        <?php endforeach; ?>
        	<?= LinkPager::widget(['pagination' => $pagination, 'options' => ['class' => 'pagination', 'data' => ['pjax' => true]]]) ?>
      	<?php Pjax::end(); ?>
      </div><!-- modal-body -->
      <div class="modal-footer autor paragraf">
         <p>С уважением,</p>
         <p>Заместитель директора СДЮШОР</p>
         <p><a href="/swiming#veretennikov">Веретенников В.В.</a></p>
         <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<!--/noindex-->