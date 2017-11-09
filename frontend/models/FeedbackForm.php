<?php

namespace frontend\models;

use Yii;
use yii\base\Model;


class FeedbackForm extends Model
{
		public $name;
		public $nameSite = 'Костюковка-Спорт';
		public $email;
		public $subject;
		public $text;
		public $verifyCode;

		public function attributeLabels()
		{
			return [
				'name' => 'Имя',
				'email' => 'E-mail',
				'subject' => 'Тема',
				'text' => 'Текст',
				'verifyCode' => 'Решите пример:',
			];
		}

		public function rules()
		{
			return [
				[['name', 'email', 'text',], 'required'],
				['email', 'email'],
				['name', 'string', 'length' => [2, 100]],//мин. макс. количество символов
				[['name', 'text', 'subject'], 'trim'],
				['verifyCode', 'captcha'],
			];
		}

		

	    public function sendEmail($email)//$email берется в контроллере (см. SiteController->actionContact)
	    {
	      if ($this->validate()) {
	        Yii::$app->mailer->compose()
	            //email получателей
	            ->setTo($email)

	            //для рассылки писем
            	->setFrom([Yii::$app->params['supportEmail'] => $this->nameSite])
            	//->setFrom(['goric0312@mail.ru' => $this->nameSite])

	            //для обратной связи:
	            //отправляющий должен указать существующий email,
	            //т.к. почта будет отправляться через него
	            //если указать не существующий email, то почта не придет
	            //->setFrom([$this->email => $this->name])

	            //для ответа
	            ->setReplyTo([$this->email => $this->name])

	            //тема письма
	            ->setSubject($this->subject)

	            //формат письма
	            ->setTextBody($this->text)
	            ->setHtmlBody(
	                '<h3>Здравствуйте, меня зовут '.$this->name.'</h3>'
	                .$this->text
	                .'<p style="font-weight: bold;">Моя почта: '
	                .$this->email.'</p>'
	            )

	            //добавление заголовка
	            //укзания почтовикам, что это массовая рассылка
	            ->addHeader('Precedence', 'bulk')
	            
	            ->send();
	        return true;
	      } else {
	        return false;
	      }
	    }

}
