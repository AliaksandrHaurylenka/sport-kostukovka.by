<?php
namespace frontend\components;

use yii\base\Widget;

class AdsWidget extends Widget{

		public function init(){
				parent::init();
				ob_start();
		}

		public function run(){
				ob_get_clean();
				return $this->render('modal_ads');
		}

} 