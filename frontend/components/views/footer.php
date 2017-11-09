<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use frontend\assets\AppAsset;


AppAsset::register($this);
?>

<!-- ФУТЕР -->
<footer class="col-sm-12">
  <div class="row footer__reset-margin">
    
    <!-- БАНЕРЫ -->
    <div class="col-sm-3 text-center footer__baner">
      <a href="http://oositgomelrik.by/" target="_blank" rel="nofollow"><img src="/frontend/web/images/otdel.bmp" alt="Гомель - спорт и туризм" title="Гомель - спорт и туризм"></a>
      <a href="http://www.fpb.by/" target="_blank" rel="nofollow"><img src="/frontend/web/images/federatsiya-profsoyuzov-belarusi.jpg" alt="Федерация профсоюзов Беларуси" title="Федерация профсоюзов Беларуси"></a>
      <a href="http://www.noc.by/" target="_blank" rel="nofollow"><img src="/frontend/web/images/olimp.gif" alt="Национальный олимпийский комитет" title="Национальный олимпийский комитет"></a>
      <a href="http://www.sportclub.by/" target="_blank" rel="nofollow"><img src="/frontend/web/images/prezsport.gif" alt="Спортклуб президента" title="Спортклуб президента"></a>
      <a href="http://www.mst.by/" target="_blank" rel="nofollow"><img src="/frontend/web/images/turizmrb.gif" alt="Республиканский спорт  и туризм" title="Республиканский спорт  и туризм"></a>
      <a href="http://www.belarus.by/ru" target="_blank" rel="nofollow"><img src="/frontend/web/images/4belarus.jpg" alt="Беларусь" title="Беларусь"></a>
    </div>

    
    <!-- МЕНЮ -->
    <div class="col-sm-6 menu-footer">

		<?php
			echo Nav::widget([
			    'options' => ['class' => 'nav col-xs-6 header__nav-main_menu'],
			    'items' => [
			      ['label' => 'Главная', 'url' => ['/site/index']],
			      ['label' => 'Плавание', 'url' => ['/site/swiming']],
			      ['label' => 'Борьба', 'url' => ['/site/wrestling']],
			      ['label' => 'Легкая атлетика', 'url' => ['/site/light-athletics']],
			      ['label' => 'Тяжелая атлетика', 'url' => ['/site/heavy-athletics']],
			      ['label' => 'Футбол', 'url' => ['/site/football']],
			      ['label' => 'Волейбол', 'url' => ['/site/volleyball']], 
			    ],
			  ]);
		?>
      
		<?php
			echo Nav::widget([
				'options' => ['class' => 'nav col-xs-6 additional-menu'],
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
			        
			        '<li class="btn btn-primary btn_footer" data-toggle="modal" data-target="#modal_ads">ОБЪЯВЛЕНИЯ</li>',
			        '<li class="btn btn-primary btn_footer" data-toggle="modal" data-target="#modal_events">СПОРТ. СОБЫТИЯ</li>',
			        '<li class="btn btn-primary btn_footer" data-toggle="modal" data-target="#modal_feedback">ОБРАТНАЯ СВЯЗЬ</li>',
			        '<li class="btn btn-success btn_footer" data-toggle="modal" data-target="#modal_football">ФУТБОЛ 2017</li>',
				],
			]);
		?>

    </div>

    
    <!-- АВТОРСКИЕ ПРАВА, СЧЕТЧИКИ -->
    <div class="col-sm-3 text-center footer__rights">
      <p>Александр Гавриленко<br>
        <a href="#" class="modal_clik_15">mail@sport-kostukovka.by</a><br>
        <a href="/backend/web/" target="_blank" class="">Sign up</a>
      </p>
      <p>&copy; 2014 - <?php echo strftime('%Y') ?></p>
      <div class="footer__counter">
        <?= $this->render('LiveInternet'); ?>
        <?= $this->render('YandexMetrika'); ?>
        <?= $this->render('PR-CY'); ?>
      </div>
    </div>

  </div>
</footer>


