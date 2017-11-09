<?php
use yii\helpers\Html;

fancybox('fancybox');
?>
<h1>ФИЗКУЛЬТУРНО-ОЗДОРОВИТЕЛЬНЫЙ ЦЕНТР "КОСТЮКОВКА-СПОРТ"</h1>
<!-- КАРУСЕЛЬ -->
<div id="carousel" class="carousel fade" data-ride="carousel">
	<!-- Indicators -->
	<div class="carousel-indicators-wrap">
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<?php
				foreach ($carousel as $key => $indicator)
				{
					echo '<li data-target="#carousel" data-slide-to="'.$indicator[id_carousel].'"></li>';
				}
			?>
		</ol>
	</div>

		<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="/frontend/web/images/main-photo/face2.jpg" alt="Спорткомплекс">
		</div>
		<?php
			foreach ($carousel as $key => $img)
			{
				echo "<div class='item'>";
					echo "<img src='/frontend/web/images/main-photo/$img[photo_name]' alt='$img[alt]'>";
				echo "</div>";
			}
		?>
	</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
</div>

		<!--СПОРТИВНЫЕ СООРУЖЕНИЯ-->
<?php $main = 'main'; ?>
<?php if ($this->beginCache($main, ['duration' => 3600*24*30])): ?><!--кэширование фрагмента-->
    <div class="row main-content_info">
        <p class="col-sm-9 indent">Государственное Учреждение &#8220;Физкультурно-оздоровительный центр &#8220;КОСТЮКОВКА-СПОРТ&#8221;
            располагает стандартным  <em>футбольным полем</em>
            с беговыми дорожками, где в летнее время проводятся игры Чемпионата города,
            области, Кубка <abbr title="Республика Беларусь">РБ</abbr> по футболу, а также  занятия легкой атлетикой и
            пляжному волейболу.</p>
        <p class="col-sm-3">
            <?php echo Html::a(Html::img('/frontend/web/images/main-photo/Img_1.jpg', ['alt'=>'Стадион']), '/frontend/web/images/main-photo/Img_1.jpg', ['rel' => 'fancybox', 'title' => 'Стадион']); ?>
        </p>
    </div>

    <div class="row main-content_info">
        <p class="col-sm-3">
            <?php echo Html::a(Html::img('/frontend/web/images/main-photo/Img_4.jpg', ['alt'=>'Борцовский зал']), '/frontend/web/images/main-photo/Img_4.jpg', ['rel' => 'fancybox', 'title' => 'Борцовский зал']); ?>
        </p>
        <p class="col-sm-6 indent"> В здании &#8220;Физкультурно-оздоровительного центра&#8221; имеются<em> два спортивных зала</em>
            (один площадью 32&#215;18м), где ежегодно проводятся занятия по футболу, волейболу,
            легкой атлетике, и второй (площадью 12&#215;8м), для проведения занятий по греко-римской
            борьбе.</p>
        <p class="col-sm-3">
            <?php echo Html::a(Html::img('/frontend/web/images/main-photo/Img_2.jpg', ['alt'=>'Спортивный зал']), '/frontend/web/images/main-photo/Img_2.jpg', ['rel' => 'fancybox', 'title' => 'Спортивный зал']); ?>
        </p>
    </div>

    <div class="row main-content_info">
        <p class="col-sm-9 indent">На втором этаже располагается <em>малый спортивный зал</em> (площадью 16&#215;8м), где стоят спортивные тренажеры и столы для настольного тенниса.
            В зале тренируются воспитанники <abbr title="Специализированная Детско-Юношеская Школа Олимпийского резерва">СДЮШОР</abbr>,
            проводятся занятия по шейпингу.</p>
        <p class="col-sm-3">
            <?php echo Html::a(Html::img('/frontend/web/images/main-photo/Img_3.jpg', ['alt'=>'Малый тренажерный зал']), '/frontend/web/images/main-photo/Img_3.jpg', ['rel' => 'fancybox', 'title' => 'Малый тренажерный зал']); ?>
        </p>
    </div>

    <div class="row main-content_info">
        <p class="col-sm-9 indent">В состав &#8220;Физкультурно-оздоровительного центра&#8221; входит стандартный <em>плавательный бассейн</em> длинной 25м,
            с шестью дорожками, двумя вышками, женской и мужской саунами. Работают инструкторский и  тренерско-преподавательский составы.</p>
        <p class="col-sm-3">
            <?php echo Html::a(Html::img('/frontend/web/images/main-photo/Img_5.jpg', ['alt'=>'Чаша бассейна']), '/frontend/web/images/main-photo/Img_5.jpg', ['rel' => 'fancybox', 'title' => 'Чаша бассейна']); ?>
        </p>
    </div>

    <div class="main-content_info">
        <p class="col-sm-9 indent">На третьем этаже здания расположился <em>бильярдный зал</em> с двумя игровыми столами, где можно
            за умеренную плату поиграть в свое удовольствие.</p>
        <p class="col-sm-3">
            <?php echo Html::a(Html::img('/frontend/web/images/main-photo/Img_6.jpg', ['alt'=>'Бильярдный зал']), '/frontend/web/images/main-photo/Img_6.jpg', ['rel' => 'fancybox', 'title' => 'Бильярдный зал']); ?>
        </p>
    </div>

    <div class="main-content_info" style="clear: both">
        <p class="indent">На базе &#8220;Физкультурно-оздоровительного центра&#8221; работает детское учреждение
            «<abbr title="Специализированная детско-юношеская школа олимпйского резерва">СДЮШОР</abbr><abbr title="Первичной профсоюзной организации"> ППО </abbr>
            <a href="http://www.gomelglass.com/" target="_blank"><abbr title="Открытое акционерное общество">ОАО</abbr> «Гомельстекло»</a>, которая подготавливает спортсменов по шести видам спорта:
            <?= Html::a('греко-римская борьба', ['/wrestling']) ?>, 
            <?= Html::a('плавание', ['/swiming']) ?>, 
            <?= Html::a('легкая атлетика', ['/light-athletics']) ?>,
            <?= Html::a('тяжелая атлетика', ['/heavy-athletics']) ?>, 
            <?= Html::a('футбол', ['/football']) ?> <i>и</i> 
            <?= Html::a('волейбол', ['/volleyball']) ?>.</p>
    </div>
<?php $this->endCache(); ?>
<?php endif; ?>

    <!--СПОРТИВНЫЕ ОТДЕЛЕНИЯ-->
    <div class="col-sm-12">
        <?php
          fancybox('division');
					foreach ($main_sport_section as $key => $img)
					{
						echo "<div class='col-sm-4 main-content_info2'>";
              				echo Html::a(Html::img("/frontend/web/images/main-photo/$img[photo]", ['alt'=> $img[alt]]), "/frontend/web/images/main-photo/$img[photo]", ['rel' => 'division', 'title' => $img[alt]]);
							echo "<p>$img[description]</p>";
        				echo "</div>";
					}
				?>
    </div>
