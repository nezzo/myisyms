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
    public $description;
    public $keywords;


    public function rules()
    {
        return [
            // username and password are both required
            [['name', 'meta'], 'required'],

        ];
    }


    /*Получаем данные с полей и заносим в базу*/
    public function post_save ($post,$id){
        $today = date("H:i:s d-m-Y");

        /*Обновляем запись в базе данных*/
        $save = Yii::$app->db->createCommand()
            ->update('news_blogpost', [
                'name' => $post['name'],
                'meta-title' => $post['meta'],
                'description' => $post['description'],
                'keywords' => $post['keywords'],
                'data' => $today,
            ], 'id=:id', array(':id'=> (int)$id))
            ->execute();

        return $save;
    }

    /*Выводим выбранную новость*/
    public function get_post($id){
        $rows = (new \yii\db\Query())
            ->select(['id','name','meta-title','description','keywords','data'])
            ->from('news_blogpost')
            ->where(['id' => (int)$id])
            ->all();

        return $rows;

    }


}