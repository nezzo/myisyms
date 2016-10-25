<?php

#@TODO нужно будет сделать что бы когда авторизиловались данные записались в базу (ип адреса и когда авторизировались)

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\admin\Login;
use app\models\admin\Blog;
use yii\web\Session;
use yii\data\Pagination;
use app\models\admin\CreatePost;
use app\models\admin\EditPost;



class AdminController extends Controller {


    public function actionLogin()
    {

        $login_obj = new Login();

        /* Полученные данные отправляем в модель классу Login и получаем ответ TRUE или FALSE*/
        if (Yii::$app->request->post('Login')){
            $login_obj->attributes = Yii::$app->request->post('Login');

            /*Результат валидации если True то выполняем данное действие*/
            if($login_obj -> validatePassword($login_obj->attributes)){

                /*Получаем ип адресс пользователя, создаем сессию и редиректим на главную страницу админки*/
                $session = Yii::$app->session;
                $session->open();
                $session['admin_ip'] = $_SERVER["REMOTE_ADDR"];
                return $this->redirect(['index']);


            }
        }

        /*Хрень связаная с формой для авторизации*/
        return $this->render('login',[
            'model'=> $login_obj,
        ]);

    }

    public function actionIndex(){

        /*Подключение менюшки к админке layouts/admin/main.php*/
        $this->layout = '/admin/main';

        return $this->render('index');

    }

    /*Функция по выходу*/
    public function actionLogout(){
        return $this->render('logout');
    }

   /*Выводим список записей постов (главные функции которые удаление,редактирование,создание)*/
    public function actionBlog(){

        $this->layout = '/admin/main';
        $news = new Blog();

        /*Подключаем пагинацию  и выводим на страницу:
          'pageSize' => 5] - количество записей на странице
         'totalCount' => count($news->get_all_post()) - количество страниц == количеству записей
          */
        $pagination = new Pagination(['totalCount' => $news->total(), 'pageSize' => 5]);

        /*Выводим пагинацию на страницу*/
        return $this->render('blog',[
            'news' => $news->get_all_post($pagination->offset,$pagination->limit),
            'pages' => $pagination,
        ]);
    }


    /*Создание постов*/
    public function actionCreate_post(){
        /*Подключение менюшки к админке layouts/admin/main.php*/
        $this->layout = '/admin/main';

         $create = new CreatePost();

        /*Получаем данные методом пост и проверяем не пустые ли. Передаем в модель */
            if(!empty(Yii::$app->request->post(CreatePost))){
                $post = Yii::$app->request->post('CreatePost');
                $create->post_save($post);
            }

            return $this->render('create_post',[
                'model'=> $create,

            ]);

    }

    /*Редактируем выбранные посты*/
    public function actionEdit_post(){

        $this->layout = '/admin/main';

        $edit = new EditPost();

        #@TODO почему то не работает вид, показывает белый экран нужно разобраться почему.
        $this->render('edit_post',[
            'model' => $edit
            ]);
    }


}