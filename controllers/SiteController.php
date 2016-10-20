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
        
        return $this->render('index',[
            'news_index' => $news_index->rows_news(),
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
        
        if (!empty($mas_news)){
         foreach ($mas_news as $news){
            $name = $news['name'];
            $image = $news['image'];
            $description = $news['description'];
            $data = $news['data'];
        }
        return $this->render('pages',[
            'name'=> $name,
            'image'=>$image,
            'description'=>$description,
            'data'=>$data
        ]);   
            
        }else{
            echo "Page Error!";
        }
        
    }
    
}
