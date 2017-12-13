<?php

function debug($arr){//вывод на печать при отладке
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

function fancybox($group){
  echo newerton\fancybox\FancyBox::widget([
    'target' => "a[rel=$group]",
    'helpers' => true,
    'mouse' => true,
    'config' => [
        'maxWidth' => '100%',
        'maxHeight' => '100%',
        'playSpeed' => 3000,
        //'padding' => 0,//для бордюра вокруг фото
        'fitToView' => false,
        'width' => '70%',
        'height' => '70%',
        'autoSize' => false,
        'closeClick' => false,
        'openEffect' => 'elastic',
        'closeEffect' => 'elastic',
        'prevEffect' => 'elastic',
        'nextEffect' => 'elastic',
        'closeBtn' => false,
        'openOpacity' => true,
        //'title' => "$(this.element).find('img').attr('alt')",
        'helpers' => [
            'title' => ['type' => 'float'],//позиция подписи // 'float', 'inside', 'outside' or 'over'
            'buttons' => [],
            'thumbs' => ['width' => 68, 'height' => 50],
            'overlay' => [
                'css' => [
                    'background' => 'rgba(0, 0, 0, 0.8)'
                ]
            ]
        ],
    ]
]);

//echo Html::a(Html::img('/folder/thumb.jpg'), '/folder/imagem.jpg', ['rel' => 'fancybox']);
}

function sport_section($coach){
  fancybox('coach');
  foreach ($coach as $key => $img) {
    echo '<a id="$img[name_en]"></a>';
    echo "<div class='row sportCoach'>";
      echo "<div class='col-sm-3'>";
        echo yii\helpers\Html::a(yii\helpers\Html::img("/frontend/web/images/coach/$img[name_en].jpg",
                ['alt' => $img['name']]),
            "/frontend/web/images/coach/$img[name_en].jpg",
            ['rel' => 'coach', 'title' => $img['name']]);
      echo "</div>";
      echo "<p class='col-sm-9 sportCoach__info'><span>$img[name]</span> $img[description]</p>";
    echo "</div>";
  }
}

function sport_section_archive($coach_archive){
  fancybox('coach_archive');
  foreach ($coach_archive as $key => $img) {
    echo "<a id='$img[name_en]'></a>";
    echo "<div class='row sportCoach'>";
      echo "<div class='col-sm-3'>";
        echo yii\helpers\Html::a(yii\helpers\Html::img("/frontend/web/images/coach/$img[name_en].jpg",
                ['alt' => $img['name']]),
            "/frontend/web/images/coach/$img[name_en].jpg",
            ['rel' => 'coach_archive', 'title' => $img['name']]);
      echo "</div>";
      echo "<p class='col-sm-9 sportCoach__info'><span>$img[name]</span> $img[description]</p>";
    echo "</div>";
  }
}

function our_pride($our_pride){
  fancybox('athletes');
  foreach ($our_pride as $key => $img){
    echo '<div class="col-sm-6 photoDoskaPochota">';
      echo '<div class="row my-flex-container_25 photoDoskaPochota_margin">';
        echo '<div class="col-xs-4 imgDoskaPochota">';
          echo yii\helpers\Html::a(yii\helpers\Html::img("/frontend/web/images/ourpride/$img[name_en].jpg",
                  ['alt'=> $img['name']]),
              "/frontend/web/images/ourpride/$img[name_en].jpg",
              ['rel' => 'athletes', 'title' => $img['name']]);
          echo "<p>$img[name]</p>";
        echo '</div>';
        echo '<div class="col-xs-8 infoDoskaPochota my-flex-container_40">';
          echo "<p>$img[description]</p>";
        echo '</div>';
      echo '</div>';
    echo '</div>';
  }
}

function glass($sport){
  foreach ($sport as $key => $img){
    fancybox("$img->where_history");
    echo <<<GLASS
          <div class="col-xs-6 col-sm-4 photoGlass">
            <a href="/frontend/web/images/glass/$img->photo_name" title="$img->alt" rel="$img->where_history"><img src="/frontend/web/images/glass/$img->photo_name" alt="$img->alt"/></a>
            <div class="photoGlassText">
              <p>$img->discription_men</p>
            </div>
          </div>
GLASS;
  }
}

function director($director){
  fancybox('director');
  foreach ($director as $key => $img){
    echo '<div class="col-xs-6 flex_height_full infoHistory1">';
      echo '<div>';
        echo yii\helpers\Html::a(yii\helpers\Html::img("/frontend/web/images/history/$img->photo_name", ['alt'=>$img->alt]), "/frontend/web/images/history/$img->photo_name", ['rel' => 'director', 'title' => $img->alt]);
      echo '</div>';
      echo '<div class="doskaDirector">';
        echo "<p><span>$img->alt</span><br/>$img->discription_men</p>";
      echo '</div>';
    echo '</div>';
  }
}

function list_athlets($sport){
  foreach ($sport as $key => $list){
    echo <<<OL
        <li><a href="#$list->photo_name">$list->alt</a></li>
OL;
  }
}

function border_history($border){
  fancybox('athletes');
  foreach ($border as $key => $img){
    echo <<<OURPRIDE
      <div class="col-sm-6 photoDoskaPochota">
        <div class="row my-flex-container_25 photoDoskaPochota_margin">
          <div class="col-xs-4 imgDoskaPochota">
            <a id="$img->photo_name"></a>
            <a href="/frontend/web/images/history/$img->photo_name" title="$img->alt" rel="athletes"><img src="/frontend/web/images/history/$img->photo_name" alt="$img->alt"/></a>
            <p>$img->alt</p>
          </div>
          <div class="col-xs-8 infoDoskaPochota my-flex-container_40">
            <p>$img->discription_men</p>
          </div>
        </div>
      </div>
OURPRIDE;
      }
}
