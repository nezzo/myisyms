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

class CreatePost extends Model
{
    public $name;
    public $meta;
    public $metadescription;
    public $image;
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
    public function post_save ($post){
        $today = date("d-m-Y");

         $save = Yii::$app->db->createCommand()
            ->insert('news_blogpost', [
                'category'=> $post['category'],
                'name' => $post['name'],
                'meta-title' => $post['meta'],
                'image' => $post['image'],
                'meta-description' => $post['metadescription'],
                'description' => $post['description'],
                'keywords' => $post['keywords'],
                'data' => $today,
                'time' => time()
            ])->execute();

        return $save;
    }

    /*Создаем категории для статьи*/
    public function category_save($category){

        $save = Yii::$app->db->createCommand()
            ->insert('category', [
                'name_category' => $category['name'],
             ])->execute();

        return $save;
    }


}