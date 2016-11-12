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
use app\models\Module;

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


        $pagination = new Pagination(['totalCount' => $news_index->total(), 'pageSize' => 6]);

        return $this->render('index',[
            'news_index' => $news_index->rows_news($pagination->offset,$pagination->limit),
            'pages' => $pagination,
        ]);
       
    }

    /*Выводим новости в разделе модули*/
    public function actionModule(){

        $module = new Module();
        $pagination = new Pagination(['totalCount' => $module->total(), 'pageSize' => 6]);

        return $this->render('module',[
            'pages' => $pagination,
            'module_news' => $module->rows_modules($pagination->offset,$pagination->limit),

        ]);
    }

    /*Выводим контактные данные на страницу КОНТАКТЫ*/
    public function actionContact()
    {
        $contact = new ContactForm();
        
        return $this->render('contact', [
            'contact' => $contact->rows_contact(),
        ]);
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
