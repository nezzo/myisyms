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
    public function get_name($id){
        $rows = (new \yii\db\Query())
            ->select(['name'])
            ->from('news_blogpost')
            ->where(['id' => (int)$id])
            ->all();

        return $rows;

    }
    /*Получаем id  и удаляем из базы*/
    public function del($id){
        $del = Yii::$app->db->createCommand()->delete('news_blogpost', 'id=:id', array(':id'=> (int) $id))->execute();

        return $del;
    }


}