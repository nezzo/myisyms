<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 25.10.16
 * Time: 23:47
 */

namespace app\models\admin;

use Yii;
use yii\base\Model;

class DeletePost extends Model
{
    /*Получаем id  и удаляем из базы*/
    public function del($id){
        $del = Yii::$app->db->createCommand()->delete('news_blogpost', 'id=:id', array(':id'=> (int) $id))->execute();

        return $del;
    }


    /*Получаем id  и удаляем из базы категорию*/
    public function del_category($id){
        $del = Yii::$app->db->createCommand()->delete('category', 'id=:id', array(':id'=> (int) $id))->execute();

        return $del;
    }



}