<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 24.10.16
 * Time: 1:09
 */
namespace app\models\admin;

use Yii;
use yii\base\Model;

class EditPost extends Model
{
    public $name;
    public $meta;
    public $metadescription;
    public $description;
    public $keywords;
    public $category;


    public function rules()
    {
        return [
            // username and password are both required
            [['name', 'meta','metadescription','category'], 'required'],

        ];
    }


    /*Получаем данные с полей и заносим в базу*/
    public function post_save ($post,$id){
        $today = date("d-m-Y");

        /*Обновляем запись в базе данных*/
        $save = Yii::$app->db->createCommand()
            ->update('news_blogpost', [
                'name' => $post['name'],
                'category' => $post['category'],
                'meta-title' => $post['meta'],
                'image' => $post['image'],
                'meta-description' => $post['metadescription'],
                'description' => $post['description'],
                'keywords' => $post['keywords'],
                'data' => $today,
                'time' => time()
            ], 'id=:id', array(':id'=> (int)$id))
            ->execute();

        return $save;
    }

    /*Выводим выбранную новость*/
    public function get_post($id){
        $rows = (new \yii\db\Query())
            ->select(['id','category','name','meta-title','image','meta-description','description','keywords'])
            ->from('news_blogpost')
            ->where(['id' => (int)$id])
            ->all();

        return $rows;

    }

    /*Получаем данные с полей и заносим в базу категории*/
    public function category_save ($category,$id){
        /*Обновляем запись в базе данных*/
        $save = Yii::$app->db->createCommand()
            ->update('category', [
                'name_category' => $category['name']
            ], 'id=:id', array(':id'=> (int)$id))
            ->execute();

        return $save;
    }

    /*Выводим выбранную категорию*/
    public function get_category($id){
        $rows = (new \yii\db\Query())
            ->select(['id','name_category'])
            ->from('category')
            ->where(['id' => (int)$id])
            ->all();

        return $rows;

    }



}