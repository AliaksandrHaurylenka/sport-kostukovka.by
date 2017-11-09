<?php
//Тренерский состав
echo "<h2 class='titlebar'>Тренерский состав</h2>";
	sport_section($coach);
echo "<br>";
  
// Архив тренеров
echo '<input type="button" class="btn btn-primary" data-toggle="collapse" data-target="#toggleSample" value="Архив тренеров">';
echo '<div id="toggleSample" class="collapse">';
	sport_section_archive($coach_archive);
echo '</div>';

// Наша гордость
echo "<br>";
echo "<h2 class='titlebar'>Наша Гордость</h2>";
echo "<div class='row our_pride_flex'>";
	our_pride($our_pride);       
echo "</div>";