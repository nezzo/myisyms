<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 23.10.16
 * Time: 3:30
 */

namespace app\models\admin;

use Yii;
use yii\base\Model;

class Blog extends Model
{

    /*Выводим все новости что есть */
    public function get_all_post($offset, $limit){
        $rows = (new \yii\db\Query())
            ->select(['id','name','category','meta-title','image','meta-description','description','keywords','data','time'])
            ->from('news_blogpost')
            ->offset($offset)
            ->limit($limit)
            ->orderBy([
                'time' => SORT_DESC
            ])
            ->all();

        return $rows;

    }

    /*Подсчитываем количество строк в таблице*/
    public function total(){
        $rows = (new \yii\db\Query())
            ->select(['id'])
            ->from('news_blogpost')
            ->all();
        return count($rows);
    }

    /*Выводим имя категории*/
    public function get_name_category($id){
        $rows = (new \yii\db\Query())
            ->select(['name_category'])
            ->from('category')
            ->where(['id' => (int)$id])
            ->all();

        foreach($rows as $id_name){
            return $id_name;
        }
       // return $rows;

    }



}