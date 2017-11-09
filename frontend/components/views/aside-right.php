<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;


AppAsset::register($this);
?>

<!-- ПРАВАЯ КОЛОНКА -->
<aside class="col-xs-2 aside-right">
  <h2 class="date"><?php echo strftime('%d/%m/%Y') ?></h2>

  <p>Новости спорта</p>
  <div class="aside-right__iframe">
    <iframe class="aside-right__iframe_right" src="/frontend/web/frame/iframenewsSite.html"></iframe>
  </div>
  <!-- РЕКЛАМА -->
  <div class="main-google-adsense-right">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <ins class="adsbygoogle"
          style="display:inline-block;width:120px;height:600px"
          data-ad-client="ca-pub-9327032145520335"
          data-ad-slot="7492236001"> </ins>
      <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
</aside>