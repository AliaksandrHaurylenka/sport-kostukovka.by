<div class="row faster_higher_stronger">
	<h2 class="col-xs-8 col-xs-offset-4">БЫСТРЕЕ</h2>
	<h2 class="col-xs-6 col-xs-offset-6">ВЫШЕ</h2>
	<h2 class="col-xs-4 col-xs-offset-8">СИЛЬНЕЕ</h2>
</div>

<div class="row our_pride_flex photoDirector">
	<h3>Директора Спортивно-оздоровительного комплекса</h3>
	<?php director($director_sok_2); ?>
</div>

<div class="row our_pride_flex photoDirector">
	<?php director($director_sok_1); ?>
</div>

<div class="row our_pride_flex photoDirector">
	<h3>Директора Спортивной Детско-юношеской школы</h3>
	<?php director($director_djussh_1); ?>
</div>

<h3 class="hall_of_fame">Доска Почета</h3>

<div class="row our_pride_flex familyName"><!--Блок имен Доски Почета-->
	<div class="col-xs-12 col-sm-6 col-md-3 section">
	    <h4>Борьба</h4>
	        <ol>
	            <?php list_athlets($wr_athlets); ?>
	        </ol>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3 section">
	    <h4>Легкая атлетика</h4>
	        <ol>
	            <?php list_athlets($la_athlets); ?>
	        </ol>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3 section">
	    <h4>Плавание, Пятиборье</h4>
	        <ol>
	            <?php list_athlets($sw_athlets); ?>
	        </ol>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3 section">
	    <h4>Баскетбол, Волейбол</h4>
	        <ol>
	            <?php list_athlets($vb_athlets); ?>
	        </ol>
	</div>
</div><!--Закрытие блока имен Доски Почета-->

<div class="row our_pride_flex">
	<?php border_history($border); ?>
</div>










