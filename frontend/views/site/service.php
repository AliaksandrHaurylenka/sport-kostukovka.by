<h2 class="titlebar">Прейскурант услуг</h2>
  
  <?php 
//ДЕНЬ, ВЕЧЕР
foreach ($service_1 as $key => $service) {
  echo <<<SERVICE
        <table class="table table-striped service">
          <tr>
            <td colspan="2">$service->service</td>
          </tr>
          <tr class="table-striped__color">
            <td>день</td>
            <td>$service->price руб.</td>
          </tr>
          <tr class="table-striped__color">
            <td>вечер</td>
            <td>$service->price_the_evening руб.</td>
          </tr>
        </table>
SERVICE;
}

//В ЛЮБОЕ ВРЕМЯ
foreach ($service_2 as $key => $service) {
  echo <<<SERVICE
        <table class="table table-striped service">
          <tr>
            <td colspan="2">$service->service</td>
          </tr>
          <tr class="table-striped__color">
            <td>1 занятие</td>
            <td>$service->price руб.</td>
          </tr>
        </table>
SERVICE;
}


  ?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-fg+5z+5c-h0+az"
     data-ad-client="ca-pub-9327032145520335"
     data-ad-slot="3032167381"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<h2 class="titlebar">Абонементная система</h2>
  <?php 
 //АБОНЕМЕНТ 5-10 ЗАНЯТИЙ
 foreach ($service_3 as $key => $service) {
      echo <<<SERVICE
        <table class="table table-striped service">
          <tr>
            <td colspan="2">$service->service</td>
          </tr>
          <tr class="table-striped__color">
            <td>Абонемент (5 занятий)</td>
            <td>$service->price_5_lessons руб.</td>
          </tr>
          <tr class="table-striped__color">
            <td>Абонемент (10 занятий)</td>
            <td>$service->price_10_lessons руб.</td>
          </tr>
        </table>
SERVICE;
    }

//АБОНЕМЕНТ 10 ЗАНЯТИЙ
 foreach ($service_4 as $key => $service) {
      echo <<<SERVICE
        <table class="table table-striped service">
          <tr>
            <td colspan="2">$service->service</td>
          </tr>
          <tr class="table-striped__color">
            <td>Абонемент (10 занятий)</td>
            <td>$service->price_10_lessons руб.</td>
          </tr>
        </table>
SERVICE;
    }  
  ?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-fg+5z+5c-h0+az"
     data-ad-client="ca-pub-9327032145520335"
     data-ad-slot="3032167381"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
  
<h2 class="titlebar">Иные виды услуг</h2>
  <?php 
foreach ($service_5 as $key => $service) {
      echo <<<SERVICE
        <table class="table table-striped service">
          <tr>
            <td style="text-align: center;">$service->service</td>
          </tr>
          <tr class="table-striped__color" style="text-align: center;">
            <td>$service->price_other руб.</td>
          </tr>
        </table>
SERVICE;
    }      
  ?>
  
<p class="service">* - уточняйте у администратора +375 (232) 97-24-30;</p>