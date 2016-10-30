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
    public $description;
    public $keywords;




    public function rules()
    {
        return [
            // username and password are both required
            [['name', 'meta','metadescription'], 'required'],

        ];
    }


    /*Получаем данные с полей и заносим в базу*/
    public function post_save ($post){
        $today = date("d-m-Y");

       $save = Yii::$app->db->createCommand()
            ->insert('news_blogpost', [
                'name' => $post['name'],
                'meta-title' => $post['meta'],
                'meta-description' => $post['metadescription'],
                'description' => $post['description'],
                'keywords' => $post['keywords'],
                'data' => $today
            ])->execute();

        return $save;
    }


}