<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Html;
use yii\data\Pagination;
use frontend\models\Ads;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;


?>

<!-- МОДАЛЬНОЕ ОКНО "ФУТБОЛ 2017" -->
<!--noindex-->
<div class="modal fade" id="modal_football" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">ФУТБОЛ 2017</h4>
      </div>
      <div class="modal-body">
      
      <!-- Финалы -->
        <div class="panel-group" id="accordion_final">
          <?php
            echo $this->render('../../views/blocks/result');
            echo $this->render('../../views/blocks/finals');
            echo $this->render('../../views/blocks/1_2_finals');
            echo $this->render('../../views/blocks/1_4_finals');
            echo $this->render('../../views/blocks/playoffs');
          ?>
        </div>
        <?php
          //Турнирная таблица
            echo $this->render('../../views/blocks/place-table');
            echo $this->render('../../views/blocks/league-table');
            echo $this->render('../../views/blocks/tours');
        ?>

        <P>Команда, занявшая 7 место, по истечении группового этапа завершают участие в соревнованиях.</P>
        <P>Команды, занявшие 1, 2 место проходят в полуфинал; 3, 4, 5, 6 – места разыгрывают путевку в полуфинал из одной встречи.</P>
        <P>Полуфиналы проводятся из двух встреч (на выезде, дома).</P>
        
        <?php
          echo $this->render('../../views/blocks/representatives');
        ?>


        <div class="panel-group" id="accordion">
          <?php
            echo $this->render('../../views/blocks/1st-round');
            echo $this->render('../../views/blocks/2st-round');
            echo $this->render('../../views/blocks/3st-round');
            echo $this->render('../../views/blocks/4st-round');
            echo $this->render('../../views/blocks/5st-round');
            echo $this->render('../../views/blocks/6st-round');
            echo $this->render('../../views/blocks/7st-round');
            
          ?>         
        </div>
          
      </div>
      
      <div class="modal-footer autor paragraf">
        <p>С уважением,</p>
         <p>Администрация</p>
         <p>ФОЦ "КОСТЮКОВКА-СПОРТ"</p>
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<!--/noindex-->