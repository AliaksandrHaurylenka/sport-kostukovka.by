<?php
//Тренерский состав
echo "<h2 class='titlebar'>Тренерский состав</h2>";
sport_section($coach);
echo "<br>";
 
// Наша гордость
echo "<br>";
echo "<h2 class='titlebar'>Наша Гордость</h2>";
echo "<div class='row our_pride_flex'>";
our_pride($our_pride);       
echo "</div>";