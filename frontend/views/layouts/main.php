<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\components\AsideLeftWidget;
use frontend\components\AsideRightWidget;
use frontend\components\FooterWidget;
use frontend\components\FeedbackWidget;
use frontend\components\AdsWidget;
use frontend\components\EventsWidget;
use frontend\components\FootballWidget;
use yii\bootstrap\Nav; 
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

//phpinfo();

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->registerLinkTag([
    'rel' => 'shortcut icon',
    'type' => 'image/x-icon',
    'href' => '/frontend/web/favicon.ico',
  ]);?>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Плавание, Легкая атлетика, СДЮШОР,
         Греко-римская борьба, Тяжелая атлетика, Волейбол, Спорт, Костюковка, Бассейн,
         Гомель, ОАО Гомельстекло, стеклозавод имени Ломоносова, Олимпийский резерв,
         Спортивно-оздоровительный комплекс, Костюковка-Спорт, Спорт-Костюковка">
  <meta name="author" content="Александр Гавриленко">
  <meta name='yandex-verification' content='602786825721ffb9'>
  <link href="/frontend/web/css/reset.css" rel="stylesheet">
  <meta name="yandex-verification" content="040191715c1e0fab">
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <?php $this->head() ?>

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-1225098430331430",
      enable_page_level_ads: true
    });
  </script>
</head>
<body>
<?php $this->beginBody() ?>
  <div class="wrap">
    <div class="container">
      <?= AdsWidget::widget(); ?>
      <?= EventsWidget::widget(); ?>
      <?= FeedbackWidget::widget(); ?>
      <?= FootballWidget::widget(); ?>

      <div class="row">
      
        <header class="col-sm-12">
        <?php //if ($this->beginCache($id, ['duration' => 3600*24*30])): ?><!--кэширование фрагмента-->    
          <!-- ШАПКА -->
          <div class="header__logo">
            <a href="/"><img src="/frontend/web/images/leftHead.png" alt="Детско-юношеская школа олимпийского резерва" class="visible-lg-block visible-md-block header_logo-left"></a>
            <a href="/"><img src="/frontend/web/images/rightHead.png" alt="Физкультурно-оздоровительный центр" class="visible-lg-block visible-md-block header_logo-right"></a>
            <a href="/"><img src="/frontend/web/images/leftHead_sm.png" alt="Детско-юношеская школа олимпийского резерва" class="header_logo-left_small-display"></a>
            <a href="/"><img src="/frontend/web/images/rightHead_sm.png" alt="Физкультурно-оздоровительный центр" class="header_logo-right_small-display"></a>
          </div>
        <?php //$this->endCache();  ?>
		<?php //endif; ?>
    
          <!-- ГЛАВНОЕ МЕНЮ -->
          <nav class="navbar navbar-default header__nav">
            <div class="container-fluid header__nav_container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar_header-brand" href="#">КОСТЮКОВКА-СПОРТ</a>
              </div>


              <div class="collapse navbar-collapse header__nav-main_menu" id="bs-example-navbar-collapse-1">

                <?php 
                  echo Nav::widget([
                        'options' => ['class' => 'nav navbar-nav header__main-menu'],
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


                <ul class="nav navbar-nav navbar-right header__icons">
                  <li><a href="https://vk.com/club143916012" target="_blank" rel="nofollow"><img src="/frontend/web/images/icons/vk_gr.png" alt="В контакте"></a></li>
                  <li><a href="https://ok.ru" target="_blank" rel="nofollow"><img src="/frontend/web/images/icons/od_gr.png" alt="Однокласники"></a></li>
                  <li><a href="https://twitter.com" target="_blank" rel="nofollow"><img src="/frontend/web/images/icons/tw_gr.png" alt="Твитер"></a></li>
                  <li><a href="https://news.tut.by/sport/" target="_blank" rel="nofollow"><img src="/frontend/web/images/icons/rss_gr.png" alt="RSS"></a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
              <span class="glyphicon glyphicon-globe header___nav-globe"></span>
            </div><!-- /.container-fluid -->
          </nav>
        </header>

        
        <section class="col-sm-12">
          <div class="row section__reset-margin my-flex-container_25">
            <?= AsideLeftWidget::widget(); ?>
            <div class='col-xs-9 col-sm-8 main-content'>
              <?= $content; ?>
            </div>
            <?= AsideRightWidget::widget(); ?>
          </div>
        </section>
        <?= FooterWidget::widget(); ?>

    </div><!-- class='row' --> 
  </div><!-- class='container' -->
</div><!-- class='wrap' -->  

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
