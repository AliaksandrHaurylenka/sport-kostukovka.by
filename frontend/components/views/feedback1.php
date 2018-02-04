<?php
//Тестирование - добавление случайной строки в сообщение
function generatePassword($length = 20)
{
  $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
  $numChars = strlen($chars);
  $string = '';
  for ($i = 0; $i < $length; $i++) 
  {
    $string .= substr($chars, rand(1, $numChars) - 1, 1);
  }
  return $string;
}
?>
<!-- Модальное окно "ОБРАТНАЯ СВЯЗЬ" -->
<!--noindex-->
<div class="modal fade" id="modal_feedback" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Свяжитесь с нами</h4>
      </div>
      <div class="modal-body">

      <?//= debug($model); ?>
        
        <!--НАЧАЛО ФОРМЫ-->
        <!-- https://itchief.ru/lessons/php/feedback-form-for-website -->
        <div class="col">
          <div class="panel panel-success">
            <div class="panel-body">

              <!-- Форма обратной связи -->
              <form id="feedbackForm" action="/feedback/process/process.php" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="col-sm-6">

                        <!-- Имя пользователя -->
                        <div class="form-group has-feedback">
                            <label for="name" class="control-label">Имя</label>
                            <input id="name" type="text" name="name" class="form-control"
                                   value="" minlength="2" required="required">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>

                    </div>
                    <div class="col-sm-6">

                        <!-- Email пользователя -->
                        <div class="form-group has-feedback">
                            <label for="email" class="control-label">Email-адрес</label>
                            <input id="email" type="email" name="email" required="required"
                                   class="form-control"
                                   value="">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>

                    </div>
                </div>

                <!-- Сообщение пользователя -->
                <div class="form-group has-feedback">
                    <label for="message" class="control-label">Сообщение (не менее 20 символов)</label>
                    <textarea id="message" name="message" class="form-control"
                              rows="5" minlength="20"
                              maxlength="500" required="required"><?= generatePassword(30); ?></textarea>
                </div>

                <!-- Капча -->
                <div class="row captcha">
                  
                  <img class="col-xs-3 img-captcha" src="/feedback/captcha/captcha.php"
                       data-src="/feedback/captcha/captcha.php">
                  
                  <div class="col-xs-2 btn btn-default refresh-captcha"><i class="glyphicon glyphicon-refresh" aria-hidden="true"></i>
                      Обновить
                  </div>
                 
                  <div class="col-xs-7 form-group has-feedback">
                    <label for="captcha" class="control-label">Код с картинки</label>
                    <input type="text" name="captcha" maxlength="6" required="required" id="captcha"
                           class="form-control captcha" placeholder="*******" autocomplete="off" value="">
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>

                <!-- Кнопка для отправки формы -->
                <button type="submit" class="btn btn-primary pull-right">Отправить
                    сообщение
                </button>

                <!-- Индикация загрузки данных формы на сервер -->
                <div class="clearfix"></div>
                <div class="progress" style="display:none; margin-top: 20px;">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                        <span class="sr-only">0%</span>
                    </div>
                </div>
                <div class="clearfix"></div>

              </form>

              <!-- Сообщение об успешной отправки формы -->
              <div class="alert alert-warning success-message hidden">
                  Форма успешно отправлена. Нажмите на <a class="show-form" href="#">ссылку</a>, чтобы отправить ещё одно сообщение.
              </div>

            </div>
          </div>
        </div>
        <!--КОНЕЦ ФОРМЫ-->


      </div>
      <div class="modal-footer"> 
      </div>
    </div>
  </div>
</div>
<!--/noindex-->