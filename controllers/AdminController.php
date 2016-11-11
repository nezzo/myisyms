<?php

#@TODO нужно будет сделать что бы когда авторизиловались данные записались в базу (ип адреса и когда авторизировались)

namespace app\controllers;

use app\models\admin\DeletePost;
use Yii;
use yii\web\Controller;
use app\models\admin\Login;
use app\models\admin\Blog;
use yii\web\Session;
use yii\data\Pagination;
use app\models\admin\CreatePost;
use app\models\admin\EditPost;
use app\models\admin\Count;
use app\models\admin\Category;



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
        $this->layout = '/admin/index';

        /*Подключаем счетчик по пользователям*/
        $ip = new Count();
        return $this->render('index',[
            'select_count'=>$ip->select_data(),
        ]);

    }

    /*Функция по выходу*/
    public function actionLogout(){
        return $this->render('logout');
    }

   /*Выводим список записей постов (главные функции которые удаление,редактирование,создание)*/
    public function actionBlog(){

        $this->layout = '/admin/main';
        $news = new Blog();

        #@TODO нужно  сделать так что бы по id категории подтягивалась сама категория(имя) при вызове и редактировании тоже

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
        $category = new Category();

        /*Получаем данные методом пост и проверяем не пустые ли. Передаем в модель */
            if(!empty(Yii::$app->request->post('CreatePost'))){
                $post = Yii::$app->request->post('CreatePost');
                $create->post_save($post);
                header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'blog');
            }

            return $this->render('create_post',[
                'model'=> $create,
                'category_post'=>$category->all_category(),

            ]);

    }

    /*Редактируем выбранные посты*/
    public function actionEdit_post(){

        $this->layout = '/admin/main';

        $edit = new EditPost();
        $category = new Category();

        /*Получаем ид поста для редактирования*/
        $id = Yii::$app->request->get('post');
        $mas_news = $edit->get_post($id);


        /*Заносим измененные данные в базу*/
        if(!empty(Yii::$app->request->post('EditPost'))){
            $post = Yii::$app->request->post('EditPost');
            $edit->post_save($post,$id);
            $mas_news = $edit->get_post($id);
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'blog');
        }

        return $this->render('edit_post',[
            'model' => $edit,
            'mas' => $mas_news,
            'category_post'=>$category->all_category(),
            ]);
    }

    /*Метод по удалению постов*/
    public function actionDel_post(){
        $del = new DeletePost();

        $id = Yii::$app->request->get('post');
        $del->del($id);

        return $this->render('del_post',[
            'del' => $del,
        ]);
    }

    public function actionKeys(){
        $this->layout = '/admin/main';
        return $this->render('keys');
    }

    public function actionCategory(){

        $this->layout = '/admin/main';
        $category = new Category();

        /*Подключаем пагинацию  и выводим на страницу:
         'pageSize' => 5] - количество записей на странице
        'totalCount' => count($news->get_all_post()) - количество страниц == количеству записей
         */
        $pagination = new Pagination(['totalCount' => $category->total(), 'pageSize' => 5]);

        /*Выводим пагинацию на страницу*/
        return $this->render('category',[
            'category_blog' => $category->get_all_category($pagination->offset,$pagination->limit),
            'pages' => $pagination,
        ]);
    }

    /*Создание категории*/
    public function actionCreate_category(){
        /*Подключение менюшки к админке layouts/admin/main.php*/
        $this->layout = '/admin/main';

        $create = new CreatePost();

        /*Получаем данные методом пост и проверяем не пустые ли. Передаем в модель */
        if(!empty(Yii::$app->request->post('CreatePost'))){
            $category = Yii::$app->request->post('CreatePost');
            $create->category_save($category);
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'category');
        }

        return $this->render('create_category',[
            'model'=> $create,
        ]);

    }

    /*Редактируем выбранные посты*/
    public function actionEdit_category(){

        $this->layout = '/admin/main';

        $edit = new EditPost();

        /*Получаем ид поста для редактирования*/
        $id = Yii::$app->request->get('category');
        $mas_news = $edit->get_category($id);


        /*Заносим измененные данные в базу*/
        if(!empty(Yii::$app->request->post('EditPost'))){
            $category = Yii::$app->request->post('EditPost');
            $edit->category_save($category,$id);
            $mas_news = $edit->get_category($id);
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'category');
        }

        return $this->render('edit_category',[
            'model' => $edit,
            'mas' => $mas_news,
        ]);
    }

    /*Метод по удалению категорий*/
    public function actionDel_category(){
        $del = new DeletePost();

        $id = Yii::$app->request->get('category');
        $del->del_category($id);

        return $this->render('del_category',[
            'del' => $del,
        ]);
    }

}