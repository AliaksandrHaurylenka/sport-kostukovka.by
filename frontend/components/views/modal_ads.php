<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Html;
use yii\data\Pagination;
use frontend\models\Ads;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;

$pagination = new Pagination([
  'defaultPageSize' => 1,
  'totalCount' => Ads::find()->count(),
]);

$ads = Ads::find()
            ->orderBy('date DESC')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
            
?>

<!-- МОДАЛЬНОЕ ОКНО "ОБЪЯВЛЕНИЯ" -->
<!--noindex-->
<!-- <div class="modal fade" id="modal_ads" tabindex="-1" role="dialog"> -->
<div class="modal fade" id="modal_ads" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg news-events" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close arcticmodal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Объявления</h4>
      </div>
      <div class="modal-body news">
      
      <?php Pjax::begin(); ?>
        <?php foreach ($ads as $result): ?>
            <h2><?= $result->name_ads; ?></h2>
            <p class="date">
              <?php 
                $date = date_create($result->date);//получение даты, которую нужно вывести в нужном формате
                echo date_format($date, 'd.m.Y');//вывод даты в нужном формате
              ?>  
            </p>
            <!-- КОНТЕНТ -->
            <?php fancybox('ads'); ?>
            <?= $result->text_ads; ?> 
        <?php endforeach; ?>
        <?= LinkPager::widget(['pagination' => $pagination, 'options' => ['class' => 'pagination'], 'linkOptions' => ['data' => ['pjax' => true]]]) ?>
      <?php Pjax::end(); ?>

      </div>
      
      <div class="modal-footer autor paragraf">
      	<p>С уважением,</p>
         <p>Администрация</p>
         <p>ФОЦ "КОСТЮКОВКА-СПОРТ"</p>
        <button type="button" class="btn btn-default arcticmodal-close" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<!--/noindex-->