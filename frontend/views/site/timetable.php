<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- content_last_h2_1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9327032145520335"
     data-ad-slot="4669872052"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
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