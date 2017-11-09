<h2 class="titlebar">График работы ГУ ФОЦ <span>"Костюковка-спорт"</span></h2>
<?php
	fancybox('timetable-img');
  foreach ($timetable as $key => $time) {
    echo <<<TIMETABLE
        <div class="row timetable">
          <div class="col-xs-6 img_timetable">
            <a href="/frontend/web/images/main-photo/$time[photo_timetable]" class="fbox" rel="timetable-img">
              <img src="/frontend/web/images/main-photo/$time[photo_timetable]" alt="$time[alt]">
            </a>
          </div>
          <div class="col-xs-6">
            $time[timetable]
          </div>
        </div>
TIMETABLE;
  }

//debug($timetable);