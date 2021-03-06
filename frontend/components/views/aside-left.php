<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use frontend\assets\AppAsset;


AppAsset::register($this);
?>
<!-- ЛЕАВАЯ КОЛОНКА -->
<aside class="col-xs-3 col-sm-2 aside-left">
  
  <?php
  	echo Nav::widget([
	  	'options' => ['class' => 'nav nav-tabs nav-stacked  aside-left__my-nav'],
	    'items' => [
	        [
	        	'dropDownOptions' => ['class' => 'dropdown-menu aside-left__my-nav'],
	            'label' => 'История',
	            'items' => [
					['label' => 'Костюковские Лужники', 'url' => ['/site/history']],
					['label' => 'Доска почета', 'url' => ['/site/hall-of-fame']],
					['label' => 'ОАО "Гомельстекло"', 'url' => ['/site/glass']],
	            ],
	        ],
	        ['label' => 'Услуги', 'url' => ['/site/service']],
	        ['label' => 'Расписание', 'url' => ['/site/timetable']],
	        ['label' => 'Контакты', 'url' => ['/site/contact']],
	    ],
	]);
  ?>

  <ul class="nav nav-pills nav-stacked aside-left__my-nav events">
    <li class="btn btn-primary btn_modal-menu" data-toggle="modal" data-target="#modal_ads">ОБЪЯВЛЕНИЯ</li>
<!--    <li class="btn btn-primary btn_modal-menu"><a href="http://news.sport" target="_blank">СПОРТ. СОБЫТИЯ</a></li>-->
    <li class="btn btn-primary btn_modal-menu" data-toggle="modal" data-target="#modal_events">СПОРТ. СОБЫТИЯ</li>
    <li class="btn btn-primary btn_modal-menu" data-toggle="modal" data-target="#modal_feedback">ОБРАТНАЯ СВЯЗЬ</li>
    <li class="btn btn-success btn_modal-menu" data-toggle="modal" data-target="#modal_football">ФУТБОЛ 2017</li>
  </ul>

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <?php echo Html::a(Html::img('/frontend/web/images/biznes_global№1.jpg', ['alt'=>'Работа для вас', 'class' => 'img-responsive']), 'https://www.worktoall.com/375293487688/personal/biz01', ['target' => '_blank']); ?>
    </div>
    
    <div class="item">
      <?php echo Html::a(Html::img('/frontend/web/images/wellness.jpg', ['alt'=>'Витаминный комплекс Wellness', 'class' => 'img-responsive']), 'https://www.worktoall.com/375293487688/personal/biz01', ['target' => '_blank']); ?>
    </div>
  </div>

</div>

  <!-- РЕКЛАМА -->
<div class="main-google-adsense-left">
  	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- asideLeft_1 -->
	<ins class="adsbygoogle"
	     style="display:block"
	     data-ad-client="ca-pub-9327032145520335"
	     data-ad-slot="2385300123"
	     data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>
</aside>

