<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\News_index;
use app\models\Pages_News;
use yii\data\Pagination;
use app\models\admin\Count;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        /*Выводим новости на главную*/
        $news_index = new News_index();
        $date = date("d.m.Y", mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));

        /*Получаем ip  адресс пользователя*/
        $ip = Yii::$app->getRequest()->getUserIP();

        /*Подключаем модель куда будет заноситься информация о пользователях*/
        $count = new Count();

        if ($count->old_connects() == 0){
            $count->dell_ips($date);
            $count->user_ip($ip);
            $count->update_visits();
            //$ss = 11;

        }else{

              //Если такой IP-адрес уже сегодня был (т.е. это не уникальный посетитель)
              if($count->get_ip_adress($ip) == $ip){
                $count->update_hit();
                $ss = $count->update_hit();
            }else{

              // Если сегодня такого IP-адреса еще не было (т.е. это уникальный посетитель)
                $count->user_ip($ip);
                $count->update_host_hit();
            }



        }
        $pagination = new Pagination(['totalCount' => $news_index->total(), 'pageSize' => 6]);

        return $this->render('index',[
            'news_index' => $news_index->rows_news($pagination->offset,$pagination->limit),
            'pages' => $pagination,
            'ss' =>$ss
        ]);
       
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    /*Выводим контактные данные на страницу КОНТАКТЫ*/
    public function actionContact()
    {
        $contact = new ContactForm();
        
        return $this->render('contact', [
            'contact' => $contact->rows_contact(),
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /*Создаем страницу и выводим новость, принимает id  записи базы по get запросу
     *      */
    public function actionPages()
    {
        $news = new Pages_News();
        $id = Yii::$app->request->get('pages');
        $mas_news = $news->pages_get($id);
        $news_widget = $news->news_widget();

        /*Формируем страницу с новостью*/
        if (!empty($mas_news)){
         foreach ($mas_news as $news){
            $title = $news['meta-title'];
            $keywords = $news['keywords'];
            $meta_description = $news['meta-description'];
            $name = $news['name'];
            $description = $news['description'];
            $data = $news['data'];
        }

        return $this->render('pages',[
            'title' => $title,
            'keywords'=> $keywords,
            'meta_description'=> $meta_description,
            'name'=> $name,
            'description'=>$description,
            'data'=>$data,
            'news_widget'=>$news_widget
        ]);   
            
        }else{
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'error');
            die();
        }
        
    }

    public function actionSearch(){

        return $this->render('search');
    }

}
