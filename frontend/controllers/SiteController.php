<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

use frontend\models\Carousel;
use frontend\models\MainSportSection;
use frontend\models\Coach;
use frontend\models\OurPride;
use frontend\models\History;
use frontend\models\Timetable;
use frontend\models\Service;

/**
 * Site controller
 */
class SiteController extends Controller
{
   //нужные для работы команды
   //Yii::$app->cache->flush();//принудительный сброс кэша
   //debug($carousel);//вывод на экран
   
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
        	[//http кэширование
	            'class' => 'yii\filters\HttpCache',
	            'only' => ['index', 'history'],
	            'lastModified' => function ($action, $params) {
	                $q = new \yii\db\Query();
	                return time() - 3600;//для чего?
	                return $q->from('carousel')->max('photo_name');
	            },
        	],
        	
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [//математическая капча
                'class' => 'hr\captcha\CaptchaAction',
                'operators' => ['+','-','*'],
                'maxValue' => 10,
                'fontSize' => 18,
            ],
        ];
    }

    /**
     * ГЛАВНАЯ
     *
     * 
     */
    public function actionIndex()
    {
        $this->view->title = 'Спорт-Костюковка';
        $this->view->registerMetaTag([
            'name' => 'description', 
            'content' => 'Специализированная Детско-юношеская Школа Олимпийского Резерва Первичной профсоюзной организации, СДЮШОР ОАО Гомельстекло'
        ]);
        
        //кэширование данных
        $carousel = Carousel::getDb()->cache(function ($db) {
		    return Carousel::find()
		    					->asArray()
		    					->where(['tab' => 'main'])
		    					->all();
		});
		
		$main_sport_section = MainSportSection::find()->asArray()->all();

        return $this->render('index', compact('carousel', 'main_sport_section'));
    }
    
    
    /**
     * ПЛАВАНИЕ
     *
     * 
     */
    public function actionSwiming()
    {
        $this->view->title = 'Спорт-Костюковка.Плавание';
        $this->view->registerMetaTag([
          'name' => 'description', 
          'content' => 'Плавание самый эффективный вид спорта, не имеющий конкурентов в оздоровительном воздействии на человеческий организм.'
        ]);
        
		$coach = Coach::find()
							->asArray()
							->where(['id_sport_section' => 1])
							->all();
		$our_pride = OurPride::find()
								->asArray()
								->where(['id_sport_section' => 1])
								->all();
        return $this->render('swiming', compact('coach', 'our_pride'));
    }
    
    
    
    /**
     * БОРЬБА
     *
     * 
     */
    public function actionWrestling()
    {
        $this->view->title = 'Спорт-Костюковка.Борьба';
        $this->view->registerMetaTag([
          'name' => 'description', 
          'content' => 'Греко-римская борьба — европейский вид единоборства. Борец, с помощью приёмов, должен вывести соперника из равновесия и прижать лопатками к ковру.'
        ]);
        $coach = Coach::find()
							->asArray()
							->where(['id_sport_section' => 2])
							->all();
		$our_pride = OurPride::find()
								->asArray()
								->where(['id_sport_section' => 2])
								->all();
        return $this->render('wrestling', compact('coach', 'our_pride'));
    }


	/**
     * ЛЕГКАЯ АТЛИТИКА
     *
     * 
     */
    public function actionLightAthletics()
    {
        $this->view->title = 'Спорт-Костюковка.Легкая атлетика';
        $this->view->registerMetaTag([
          'name' => 'description', 
          'content' => 'Легкая атлетика – олимпийский вид спорта, включающий в себя беговые виды, спортивную ходьбу, многоборья. Легкая атлетика — королева спорта.'
        ]);
        
        $coach = Coach::find()
						->asArray()
						->where(['id_sport_section' => 3, 'archive' => NULL])
						->all();
		$coach_archive = Coach::find()
								->asArray()
								->where(['archive' => 'archive'])
								->all();
		$our_pride = OurPride::find()
								->asArray()
								->where(['id_sport_section' => 3])
								->all();
        return $this->render('light-athletics', compact('coach', 'coach_archive', 'our_pride'));
    }
    
    
	/**
     * ТЯЖЕЛАЯ АТЛЕТИКА
     *
     * 
     */
    public function actionHeavyAthletics()
    {
        $this->view->title = 'Спорт-Костюковка.Тяжелая атлетика';
        $this->view->registerMetaTag([
          'name' => 'description', 
          'content' => 'Тяжелая атлетика – олимпийский вид спорта. Спортсмены соревнуются в выполнении упражнений по поднятию штанги. Входят упражнения: толчок и рывок.'
        ]);
        $coach = Coach::find()
							->asArray()
							->where(['id_sport_section' => 4])
							->all();
		$our_pride = OurPride::find()
								->asArray()
								->where(['id_sport_section' => 4])
								->all();
        return $this->render('heavy-athletics', compact('coach', 'our_pride'));
    }
    
    
    
	/**
     * ФУТБОЛ
     *
     * 
     */
    public function actionFootball()
    {
        $this->view->title = 'Спорт-Костюковка.Футбол';
        $this->view->registerMetaTag([
          'name' => 'description', 
          'content' => 'Футбол — командный вид спорта. Цель - забить мяч в ворота соперника ногами или другими частями тела (кроме рук). Массовый вид спорта в мире'
        ]);
        $coach = Coach::find()
							->asArray()
							->where(['id_sport_section' => 5])
							->all();
		$our_pride = OurPride::find()
								->asArray()
								->where(['id_sport_section' => 5])
								->all();
        return $this->render('football', compact('coach', 'our_pride'));
    }
	
	
	/**
     * ВОЛЕЙБОЛ
     *
     * 
     */
    public function actionVolleyball()
    {
        $this->view->title = 'Спорт-Костюковка.Волейбол';
        $this->view->registerMetaTag([
          'name' => 'description', 
          'content' => 'Волейбол – олимпийский вид спорта. Цель - направить мяч в сторону соперника таким образом, чтобы он приземлился на половине соперника или добиться ошибки со стороны игрока команды соперника.'
        ]);
        $coach = Coach::find()
							->asArray()
							->where(['id_sport_section' => 6])
							->all();
		$our_pride = OurPride::find()
								->asArray()
								->where(['id_sport_section' => 6])
								->all();
        return $this->render('volleyball', compact('coach', 'our_pride'));
    }
    
    
    /**
     * КОСТЮКОВСКИЕ ЛУЖНИКИ
     *
     * 
     */
    public function actionHistory()
    {
        $this->view->title = 'Спорт-Костюковка.Костюковские Лужники';
        $this->view->registerMetaTag([
          'name' => 'description', 
          'content' => '10 декабря 1973 года в поселке Костюковка открылся СПОРТИВНО-ОЗДОРОВИТЕЛЬНЫЙ КОМПЛЕКС завкома Гомельского ордена Ленина стеклозавода им. Ломоносова.'
        ]);
        $carousel = Carousel::getDb()->cache(function ($db) {
		    return Carousel::find()
	    					->asArray()
	    					->where(['tab' => 'history'])
	    					->all();
		});
        return $this->render('history', compact('carousel'));
    }
    
    
    /**
     * ДОСКА ПОЧЕТА
     *
     * 
     */
    public function actionHallOfFame()
    {
        $this->view->title = 'Спорт-Костюковка.Доска почета';
        $this->view->registerMetaTag([
          'name' => 'description', 
          'content' => 'Доска почетных спортсменов, директоров Спортивно-оздоровительного комплекса ОАО "Гомельстекло"'
        ]);
        $director_sok_1 = History::find()->where(['where_history' => 'director_sok', 'string' => 1])->orderBy(['id_history' => SORT_DESC])->all();
        $director_sok_2 = History::find()->where(['where_history' => 'director_sok', 'string' => 2])->orderBy(['id_history' => SORT_DESC])->all();
        $director_djussh_1 = History::find()->where(['where_history' => 'director_djussh', 'string' => 1])->orderBy(['id_history' => SORT_DESC])->all();
        $wr_athlets = History::findAll(['where_history' => 'doska_pocheta_wr']);
        $la_athlets = History::findAll(['where_history' => 'doska_pocheta_la']);
        $sw_athlets = History::findAll(['where_history' => 'doska_pocheta_sw']);
        $vb_athlets = History::findAll(['where_history' => 'doska_pocheta_vb']);
        $border = History::find()->where(['or', '`where_history` = \'doska_pocheta_wr\'', 
                                                '`where_history` = \'doska_pocheta_la\'',
                                                '`where_history` = \'doska_pocheta_sw\'',
                                                '`where_history` = \'doska_pocheta_vb\''])
                                ->all();
        return $this->render('hall-of-fame', compact(
                                                'director_sok_1', 
                                                'director_sok_2', 
                                                'director_djussh_1',
                                                'wr_athlets',
                                                'la_athlets',
                                                'sw_athlets',
                                                'vb_athlets',
                                                'border'));
    }
    
    
    /**
     * ГОМЕЛЬСТЕКЛО
     *
     * 
     */
    public function actionGlass()
    {
        $this->view->title = 'Спорт-Костюковка.ОАО "Гомельсткело"';
        $this->view->registerMetaTag([
          'name' => 'description', 
          'content' => 'Ежегодно, входя в состав подразделения ОАО Гомельстекло, в «Спортивно-оздоровительном комплексе» проводилась круглогодичная СПАРТАКИАДА между цехами.'
        ]);
        $tennis = History::findAll(['where_history' => 'glass_tennis']);
        $ski = History::findAll(['where_history' => 'glass_ski']);
        $swim = History::findAll(['where_history' => 'glass_swim']);
        $volleyball = History::findAll(['where_history' => 'glass_vb']);
        $multiathlon = History::findAll(['where_history' => 'glass_la']);
        $chess = History::findAll(['where_history' => 'glass_chess']);
        $darts = History::findAll(['where_history' => 'glass_dr']);
        return $this->render('glass', compact(
                                        'tennis', 
                                        'ski', 
                                        'swim', 
                                        'volleyball', 
                                        'multiathlon', 
                                        'chess', 
                                        'darts'));
    }
    
    
    /**
     * УСЛУГИ
     *
     * 
     */
    public function actionService()
    {
        $this->view->title = 'Спорт-Костюковка.Услуги';
        $this->view->registerMetaTag([
          'name' => 'description', 
          'content' => 'Перечень услуг предоставляемых Физкультурно-оздоровительным ценром Костюковка-Спорт.'
        ]);
        $service_1 = Service::find()->where('price_the_evening IS NOT NULL')->all();
        $service_2 = Service::find()->where(['and', 
                                            '`price` IS NOT NULL',
                                            '`price_the_evening` IS NULL'])
                                    ->all();
        $service_3 = Service::find()->where(['and', 
                                            '`price_5_lessons` IS NOT NULL',
                                            '`price_10_lessons` IS NOT NULL'])
                                    ->all();
        $service_4 = Service::find()->where(['and', 
                                            '`price_5_lessons` IS NULL',
                                            '`price_10_lessons` IS NOT NULL'])
                                    ->all();
        $service_5 = Service::find()->where('price_other IS NOT NULL')->all();                                                        
        return $this->render('service', compact('service_1', 
                                                'service_2', 
                                                'service_3',
                                                'service_4',
                                                'service_5'));
    }
    
    
    /**
     * РАСПИСАНИЕ
     *
     * 
     */
    public function actionTimetable()
    {
        $this->view->title = 'Спорт-Костюковка.Расписание';
        $this->view->registerMetaTag([
          'name' => 'description', 
          'content' => 'Расписание занятий Физкультурно-оздоровительного центра Костюковка-Спорт.'
        ]);
        $timetable = Timetable::getDb()->cache(function ($db) {
		    return Timetable::find()->asArray()->all();
		});
		//debug($timetable);
        return $this->render('timetable', compact('timetable'));
    }
    
    
    /**
     * КОНТАКТЫ
     *
     * 
     */
    public function actionContact()
    {
        $this->view->title = 'Спорт-Костюковка.Контакты';
        $this->view->registerMetaTag([
          'name' => 'description', 
          'content' => 'Контактная информация: телефоны регистратуры, директоров, Яндекс.Карта расположения Физкультурно-оздоровительного центра Костюковка-Спорт.'
        ]);
        return $this->render('contact');
    }

}
