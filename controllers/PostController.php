<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 07.01.17
 * Time: 15:01
 */
//REST API Постов (редактирование,удаление, добавление)


namespace app\controllers;

use yii\rest\ActiveController;
use app\models\admin\Post;

class PostController extends ActiveController
{
    public $modelClass = "app\models\admin\Post";

}